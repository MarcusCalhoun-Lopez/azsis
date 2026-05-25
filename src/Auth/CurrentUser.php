<?php
declare(strict_types=1);
namespace AzSIS\Auth;

const MANAGER_STAFF = 0b001;
const VIEWER_STAFF  = 0b010;
const MONITOR_STAFF = 0b100;

final class CurrentUser {
    private readonly bool   $isLoggedIn;
    private readonly ?int   $staffId;
    private readonly int    $permissions;
    private readonly ?int   $studentId;
    private readonly ?int   $adultId;
    private readonly string $displayName;
    private readonly string $pictureUrl;

    private readonly Authenticator $authenticator;

    private const CurrentUserCacheMaxTime = 8*60*60;

    public function __construct(\PDO $dbh, \AzSIS\Auth\Authenticator $auth) {
        $this->authenticator = $auth;

        if( (
                isset($_SESSION['StaffId'])   ||
                isset($_SESSION['StudentId']) ||
                isset($_SESSION['AdultId'])
            )                                                                         &&
            isset($_SESSION['CurrentUserCacheTime'])                                  &&
            time()-$_SESSION['CurrentUserCacheTime'] <= self::CurrentUserCacheMaxTime
        ) {
            // Trust $_SESSSION values.
            $this->isLoggedIn  = true;
            $this->staffId     = isset($_SESSION['StaffId'])     ? (int)    $_SESSION['StaffId']     : null;
            $this->permissions = isset($_SESSION['Permissions']) ? (int)    $_SESSION['Permissions'] : 0;
            $this->studentId   = isset($_SESSION['StudentId'])   ? (int)    $_SESSION['StudentId']   : null;
            $this->adultId     = isset($_SESSION['AdultId'])     ? (int)    $_SESSION['AdultId']     : null;
            $this->displayName = isset($_SESSION['DisplayName']) ? (string) $_SESSION['DisplayName'] : '';
            $this->pictureUrl  = isset($_SESSION['PictureUrl'])  ? (string) $_SESSION['PictureUrl']  : '';
            return;
        }

        if( $auth->is_logged_in() ) {
            $this->isLoggedIn  = true;
            [
            $this->staffId,
            $this->permissions
            ]                  = $auth->staff_id($dbh);
            $this->studentId   = $auth->student_id($dbh);
            $this->adultId     = $auth->adult_id($dbh);
            $this->displayName = $auth->display_name();
            $this->pictureUrl  = $auth->picture_url();

            $_SESSION['StaffId']              = $this->staffId;
            $_SESSION['Permissions']          = $this->permissions;
            $_SESSION['StudentId']            = $this->studentId;
            $_SESSION['AdultId']              = $this->adultId;
            $_SESSION['DisplayName']          = $this->displayName;
            $_SESSION['PictureUrl']           = $this->pictureUrl;
            $_SESSION['CurrentUserCacheTime'] = time();
        } else {
            $this->isLoggedIn  = false;
            $this->staffId     = null;
            $this->studentId   = null;
            $this->adultId     = null;
            $this->permissions = 0;
            $this->displayName = '';
            $this->pictureUrl  = '';
        }
    }

    public function is_logged_in(): bool {
        return $this->isLoggedIn;
    }

    public function picture_url(): string {
        return $this->pictureUrl;
    }

    public function display_name(): string {
        return $this->displayName;
    }

    public function authenticator(): Authenticator {
        return $this->authenticator;
    }

    public function permissions(): int {
        return $this->permissions;
    }

    public function is_staff(int $anyOfPermissions = 0): ?int {
        if( $this->staffId === null )
            return null;
        if( $anyOfPermissions !== 0 && (($this->permissions & $anyOfPermissions) === 0) )
            return null;
        return $this->staffId;
    }

    public function is_student(): ?int {
        if( $this->studentId === null )
            return null;
        return $this->studentId;
    }

    public function is_adult(): ?int {
        if( $this->adultId === null )
            return null;
        return $this->adultId;
    }

    public function require_staff(int $anyOfPermissions = 0): int {
        $ret = $this->is_staff($anyOfPermissions);
        if( $ret === null )
            $this->invalid_user();
        return $ret;
    }

    public function require_student(): int {
        $ret = $this->is_student();
        if( $ret === null )
            $this->invalid_user();
        return $ret;
    }

    public function require_adult(): int {
        $ret = $this->is_adult();
        if( $ret === null )
            $this->invalid_user();
        return $ret;
    }

    private function invalid_user(): never {
        if( headers_sent() )
            throw new \Exception('Invalid User Permission Check');

        if( $this->is_logged_in() ) {
            http_response_code(403);
            header('Content-Type: text/html; charset=UTF-8');
            header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
            require __DIR__ . '/../../errors/403.php';
            exit(1);
        }

        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $parts = parse_url($uri);
        $path  = $parts['path']  ?? '/';
        $query = isset($parts['query']) ? ('?' . $parts['query']) : '';
        if( !preg_match('#^/[A-Za-z0-9/_-]*$#', $path) ) {
            $path = '/';
            $query = '';
        }
        if( $query !== '' && (
            strlen($query) > 1024 ||
            !preg_match('#^\?[A-Za-z0-9&=_\[\]\-.,%+:@/]*$#', $query)
        ))
            $query = '';
        $_SESSION['return_to'] = $path . $query;

        header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        header('Location: /signin.php', true, 303);
        exit(1);
    }
}
