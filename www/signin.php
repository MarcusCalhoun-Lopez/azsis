<?php
declare(strict_types=1);
[$currentUser,] = require __DIR__ . '/../src/bootstrap.php';

header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');

if( $currentUser->is_logged_in() ) {
    // User seems to be logged in, so go home.
    header('Location: /', true, 303);
    exit;
} else {
    // User needs to log in, so redirect to get code.
    header("Location: {$currentUser->authenticator()->redirect_url()}", true, 303);
    exit;
}
?>
