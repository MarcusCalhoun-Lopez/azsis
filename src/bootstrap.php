<?php
declare(strict_types=1);
namespace AzSIS\Bootstrap;
require __DIR__ . '/../vendor/autoload.php';

set_exception_handler( function(\Throwable $e): void {
    $errorId = bin2hex(random_bytes(6)); // 12 hex chars
    error_log("{$errorId}: Error at line {$e->getLine()} in file {$e->getFile()}: {$e->getMessage()}");
    if( !headers_sent() ) {
        http_response_code(500);
        header('Content-Type: text/html; charset=UTF-8');
    }
    echo "<h1>Uncaught Exception: {$errorId}</h1>";
    exit(1);
});

if( getenv('AZSIS_ERROR_OUTPUT') === 'Testing' )
    set_exception_handler( function(\Throwable $e): void {
        echo "Error at line {$e->getLine()} in file {$e->getFile()}: {$e->getMessage()}";
        exit(1);
    });

set_error_handler(function (int $severity, string $message, string $file, int $line): bool {
    // Honor error_reporting() and @ suppression.
    if( !(error_reporting() & $severity) )
        return true;
    throw new \ErrorException($message, 0, $severity, $file, $line);
    return true;
});

error_reporting(E_ALL);

// Only try to start a session if no other exists.
if( session_status() !== PHP_SESSION_ACTIVE ) {
    // If headers already sent, cookies can't be set correctly.
    if( headers_sent($file, $line) )
        throw new \RuntimeException("Cannot start session: headers already sent in {$file}:{$line}");

    // Set session name before session_set_cookie_params.
    // See https://www.php.net/manual/en/function.session-name.php#89090
    if( session_name('sis_domains') === false )
        throw new \RuntimeException('session_name failed');

    // Do not pass cookies through URLs.
    // See https://www.php.net/manual/en/session.configuration.php#ini.session.use-only-cookies
    if( ini_set('session.use_only_cookies', true) === false )
        throw new \RuntimeException('ini_set session.use_only_cookies failed');

    // All sites are advised to enable session.use_strict_mode
    // See https://www.php.net/manual/en/session.configuration.php#ini.session.use-strict-mode
    if( ini_set('session.use_strict_mode', true) === false )
        throw new \RuntimeException('ini_set session.use_strict_mode failed');

    // Set the cookie lifetime to "until the browser is closed."
    // See https://www.php.net/manual/en/session.configuration.php#ini.session.cookie-lifetime
    if( ini_set('session.cookie_lifetime', 0) === false )
        throw new \RuntimeException('ini_set session.cookie_lifetime failed');

    // See https://www.php.net/manual/en/function.session-set-cookie-params.php
    if( !session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'domain'   => '',
        'secure'   => true,
        'httponly' => true,
        'samesite' => 'Lax',
    ]))
        throw new \RuntimeException('session_set_cookie_params failed');

    if( !session_start() )
        throw new \RuntimeException('session_start failed');
}

$nonce = base64_encode(random_bytes(16));

header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('X-Frame-Options: DENY');
header("Content-Security-Policy: default-src 'self'; img-src 'self' https: data:; style-src 'self' 'nonce-{$nonce}'; script-src 'self' 'nonce-{$nonce}'; base-uri 'self'; frame-ancestors 'none'");
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
header('Cache-Control: no-store');

return [
    new \AzSIS\Auth\CurrentUser( \AzSIS\Db\Db::handler(), \AzSIS\Auth\AuthenticatorManager::authenticator() ),
    $nonce,
];
