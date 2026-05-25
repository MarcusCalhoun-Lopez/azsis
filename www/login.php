<?php
declare(strict_types=1);
[$currentUser,] = require __DIR__ . '/../src/bootstrap.php';

$currentUser->authenticator()->initialize();
$_SESSION['sign_out_csrf_token'] = bin2hex(random_bytes(32));

$returnTo = $_SESSION['return_to'] ?? '/';
unset($_SESSION['return_to']);

$parts = parse_url($returnTo);
$path  = $parts['path'] ?? '/';
$query = isset($parts['query']) ? ('?' . $parts['query']) : '';
if( !preg_match('#^/[A-Za-z0-9/_-]*$#', $path) ) {
    $path = '/';
    $query = '';
}
if( $query !== '' && (
    strlen($query) > 1024 || !preg_match('#^\?[A-Za-z0-9&=_\[\]\-.,%+:@/]*$#', $query)
))
    $query = '';
header("Location: {$path}{$query}", true, 303);
exit;
?>
