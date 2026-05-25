<?php
declare(strict_types=1);
[$currentUser,] = require __DIR__ . '/../src/bootstrap.php';

if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
    http_response_code(405);
    header('Content-Type: text/html; charset=UTF-8');
    header('Allow: POST');
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('X-Content-Type-Options: nosniff');
    $allowedMethods = ['POST'];
    require __DIR__ . '/../errors/405.php';
    exit;
}

if ( !isset($_SESSION['sign_out_csrf_token'], $_POST['sign_out_csrf_token']) ||
     !hash_equals($_SESSION['sign_out_csrf_token'], $_POST['sign_out_csrf_token'])
) {
    http_response_code(403);
    header('Content-Type: text/html; charset=UTF-8');
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('X-Content-Type-Options: nosniff');
    require __DIR__ . '/../errors/403.php';
    exit;
}
unset($_SESSION['sign_out_csrf_token']);

// If there is no active session, nothing to destroy.
if( session_status() === PHP_SESSION_ACTIVE ) {
    // Unset all session values.
    // Session_unset is discouraged (see https://www.php.net/manual/en/function.session-unset.php).
    $_SESSION = [];

    // Delete cookie.
    $params = session_get_cookie_params();
    if( !setcookie(
        session_name(),
        '', [
        'expires'  => time() - 42000,
        'path'     => $params['path']     ?? '/',
        'domain'   => $params['domain']   ?? '',
        'secure'   => $params['secure']   ?? true,
        'httponly' => $params['httponly'] ?? true,
        'samesite' => $params['samesite'] ?? 'Lax',
    ]))
        throw new \RuntimeException('setcookie failed');

    // Destroy session.
    if( !session_destroy() )
        throw new \RuntimeException('session_destroy failed');
}

header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Location: /', true, 303);
exit;
