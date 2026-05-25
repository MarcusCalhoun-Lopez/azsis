<?php
declare(strict_types=1);
namespace AzSIS\Auth;

final class GoogleAuthenticator implements Authenticator {

    // Get Google admin account.
    // See https://support.google.com/a/answer/182076
    public static function admin_account(): string {
        $ret = getenv('AZSIS_GOOGLE_ADMIN_ACCOUNT');
        if( $ret === false )
            throw new \RuntimeException('Google Admin Account Not Found');
        return $ret;
    }

    public static function admin_client(): \Google\Client {
        $client = new \Google\Client();
        $client->setAuthConfig(__DIR__ . '/../../credentials/online-grade-system.json');
        return $client;
    }

    // Try to determine if user is logged in.
    public function is_logged_in(): bool {
        return isset($_SESSION['google_payload']);
    }

    public function redirect_url(): string {
        $client = new \Google\Client();
        $client->setAuthConfig(__DIR__ . '/../../credentials/client_secret.json');
        $client->setAccessType('offline');
        $client->setScopes([
            \Google\Service\Oauth2::OPENID,
            \Google\Service\Oauth2::USERINFO_EMAIL,
            \Google\Service\Oauth2::USERINFO_PROFILE,
        ]);
        $client->setRedirectUri($this->redirect_uri());
        $client->setIncludeGrantedScopes(false);
        $state = bin2hex(random_bytes(32));
        $_SESSION['google_csrf_token'] = $state;
        $client->setState($state);
        $url = $client->createAuthUrl();
        if( filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED) === false )
            throw new \RuntimeException('Invalid Authorization URL');
        return $url;
    }

    // Initialize data from verification service.
    public function initialize(): void {
        if( !isset($_GET['code']) )
            // Google has *not* redirected here with authentication code, so there is nothing to do.
            return;

        // Attempt to prevent Cross-site request forgery (CSRF).
        if( !isset($_GET['state']) || !isset($_SESSION['google_csrf_token']) || !hash_equals($_SESSION['google_csrf_token'], $_GET['state']) )
            throw new \RuntimeException('Cannot Verify Callback State to Prevnet Cross-site request forgery (CSRF).');
        unset($_SESSION['google_csrf_token']);

        // Google has redirected here with authentication code.
        // Verfy and save token payload.
        $client = new \Google\Client();
        $client->setAuthConfig(__DIR__ . '/../../credentials/client_secret.json');
        $client->setRedirectUri($this->redirect_uri());
        $accessToken = $client->fetchAccessTokenWithAuthCode($_GET['code']);

        // Ensure there is no error in token authorization.
        if ( isset($accessToken['error']) )
            throw new \RuntimeException("Error in Token Authorization: {$accessToken['error_description']} ({$accessToken['error']})");

        // Get Google payload from access token.
        // See https://developers.google.com/identity/protocols/oauth2
        // See https://developers.google.com/identity/sign-in/web/backend-auth#php
        $client->setAccessToken($accessToken);
        if( $client->isAccessTokenExpired() ) {
            // Token is expired or is invalid, so refresh token.
            $refreshToken = $client->getRefreshToken();
            if( $refreshToken === null )
                throw new \RuntimeException('Unable to Refresh Token');
            $client->fetchAccessTokenWithRefreshToken($refreshToken);
        }
        $googlePayload = $client->verifyIdToken();
        if( $googlePayload === false )
            throw new \RuntimeException('Token Verification Failed');

        // Do some basic validation of token payload.
        // See https://developers.google.com/identity/sign-in/web/backend-auth#verify-the-integrity-of-the-id-token
        if( $googlePayload['aud'] !== $this->client_id() )
            throw new \RuntimeException('Invalid Google Client ID');

        if( !in_array($googlePayload['iss'], [
            'accounts.google.com',
            'https://accounts.google.com',
        ]))
            throw new \RuntimeException("Invalid Google Account URL: {$googlePayload['iss']}");

        if( !in_array($googlePayload['hd'], $this->domains()) )
            throw new \RuntimeException("Invalid Google System Domain: {$googlePayload['hd']}");

        if( isset($googlePayload['picture']) && filter_var($googlePayload['picture'], FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)===false )
            throw new \RuntimeException("Invalid Token Payload Picture: {$googlePayload['picture']}");

        // See https://www.php.net/session_regenerate_id
        if( !session_regenerate_id(true) )
            throw new \RuntimeException('session_regenerate_id failed');

        //$_SESSION['access_token'] = $accessToken;
        // Not all "claims" are guaranteed.
        // See https://developers.google.com/identity/openid-connect/openid-connect#validatinganidtoken
        $_SESSION['google_payload'] = [
            'sub'     => $googlePayload['sub'],
            'picture' => $googlePayload['picture'] ?? '/common/img/default_google_picture.png',
            'name'    => $googlePayload['name']    ?? 'Unknown Name',
        ];
    }

    public function staff_id(\PDO $dbh): array {
        $googleId = $this->google_id();

        $sth = $dbh->prepare('SELECT Staff.StaffId FROM `Staff` WHERE Staff.StaffGoogleId=?');
        $sth->execute([$googleId]);
        $result = $sth->fetchAll(\PDO::FETCH_ASSOC);

        if( count($result) > 1 )
            // Google ID should be unique, so returning more than one result is an error.
            throw new \RuntimeException('Should Not Return More Than One Staff Member');

        if( count($result) < 1 )
            // User is not staff member if Google ID cannot be found.
            return [
                null,
                0,
            ];

        $client = new \Google\Client();
        $client->setAuthConfig(__DIR__ . '/../../credentials/online-grade-system.json');
        $client->setSubject($this->admin_account());
        $client->addScope([
            \Google\Service\Directory::ADMIN_DIRECTORY_USER_READONLY,
            \Google\Service\Directory::ADMIN_DIRECTORY_GROUP_READONLY,
            \Google\Service\Directory::ADMIN_DIRECTORY_GROUP_MEMBER_READONLY,
        ]);
        $service = new \Google\Service\Directory($client);

        return [
            $result[0]['StaffId'],
            (
                ($service->members->hasMember($this->manager_group(), $googleId)->getIsMember() ? MANAGER_STAFF : 0 ) |
                ($service->members->hasMember($this->viewer_group(),  $googleId)->getIsMember() ? VIEWER_STAFF  : 0 ) |
                ($service->members->hasMember($this->monitor_group(), $googleId)->getIsMember() ? MONITOR_STAFF : 0 )
            ),
        ];
    }

    public function student_id(\PDO $dbh): ?int {
        $googleId = $this->google_id();

        $sth = $dbh->prepare('SELECT Students.StudentId FROM `Students` WHERE Students.StudentGoogleId=?');
        $sth->execute([$googleId]);
        $result = $sth->fetchAll(\PDO::FETCH_ASSOC);

        if( count($result) > 1 )
            // Google ID should be unique, so returning more than one result is an error.
            throw new \RuntimeException('Should Not Return More Than One Student');

        if( count($result) < 1 )
            // User is not student if Google ID cannot be found.
            return null;
        else
            // Google ID was found in database.
            return $result[0]['StudentId'];
    }

    public function adult_id(\PDO $dbh): ?int {
        $googleId = $this->google_id();

        $sth = $dbh->prepare('SELECT Adults.AdultId FROM `Adults` WHERE Adults.AdultGoogleId=?');
        $sth->execute([$googleId]);
        $result = $sth->fetchAll(\PDO::FETCH_ASSOC);

        if( count($result) > 1 )
            // Google ID should be unique, so returning more than one result is an error.
            throw new \RuntimeException('Should Not Return More Than One Adult');

        if( count($result) < 1 )
            // User is not adult if Google ID cannot be found.
            return null;
        else
            // Google ID was found in database.
            return $result[0]['AdultId'];
    }

    public function picture_url(): string {
        if( !isset($_SESSION['google_payload']['picture']) )
            throw new \RuntimeException('Unable to Determine Google Picture');
        return $_SESSION['google_payload']['picture'];
    }

    public function display_name(): string {
        if( !isset($_SESSION['google_payload']['name']) )
            throw new \RuntimeException('Unable to Determine Google Name');
        return $_SESSION['google_payload']['name'];
    }

    // Get Google ID (numerical value and *not* simply the email).
    private function google_id(): string {
        if( !isset($_SESSION['google_payload']['sub']) )
            throw new \RuntimeException('Google ID Cannot Be Found');
        // See https://developers.google.com/identity/sign-in/web/backend-auth#php
        return $_SESSION['google_payload']['sub'];
    }

    // Get login URL to be redirected to.
    private function redirect_uri(): string {
        $ret = getenv('AZSIS_GOOGLE_REDIRECT_URI');
        if( $ret === false )
            throw new \RuntimeException('Google Redirect URI Not Found');
        return $ret;
    }

    // Get client ID for web app.
    private function client_id(): string {
        $ret = getenv('AZSIS_GOOGLE_CLIENT_ID');
        if( $ret === false )
            throw new \RuntimeException('Google Client ID Not Found');
        return $ret;
    }

    // Get valid domains for ID.
    private function domains(): array {
        $ret = getenv('AZSIS_GOOGLE_DOMAINS');
        if( $ret === false )
            throw new \RuntimeException('Google Domains Not Found');
        return explode('|', $ret);
    }

    // Get Google Group for Managers.
    private function manager_group(): string {
        $ret = getenv('AZSIS_GOOGLE_GROUPS_MANAGERS');
        if( $ret === false )
            throw new \RuntimeException('Google Manager Group Not Found');
        return $ret;
    }

    // Get Google Group for Viewers.
    private function viewer_group(): string {
        $ret = getenv('AZSIS_GOOGLE_GROUPS_VIEWERS');
        if( $ret === false )
            throw new \RuntimeException('Google Viewer Group Not Found');
        return $ret;
    }

    // Get Google Group for Elementary Viewers.
    private function monitor_group(): string {
        $ret = getenv('AZSIS_GOOGLE_GROUPS_MONITORS');
        if( $ret === false )
            throw new \RuntimeException('Google Monitor Group Not Found');
        return $ret;
    }
}
