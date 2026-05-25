<?php
declare(strict_types=1);
[$currentUser, $nonce] = require __DIR__ . '/../src/bootstrap.php';
$dbh = \AzSIS\Db\Db::handler();

if( $currentUser->is_logged_in()    &&
    $currentUser->is_staff()        &&
    $currentUser->permissions()===0 &&
    !$currentUser->is_student()     &&
    !$currentUser->is_adult()
) {
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Pragma: no-cache');
    header('Location: staff', true, 303);
    exit;
}

if( $currentUser->is_logged_in() &&
    !$currentUser->is_staff()    &&
    $currentUser->is_student()   &&
    !$currentUser->is_adult()
) {
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Pragma: no-cache');
    header('Location: student', true, 303);
    exit;
}

if( $currentUser->is_logged_in() &&
    !$currentUser->is_staff()    &&
    !$currentUser->is_student()  &&
    $currentUser->is_adult()
) {
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Pragma: no-cache');
    header('Location: adult', true, 303);
    exit;
}

$title = ['Student Information System'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?=implode('; ',$title)?></title>
<link rel="stylesheet" type="text/css" href="/common/css/main.css">
<style nonce="<?=htmlspecialchars($nonce, ENT_QUOTES)?>">
</style>
<script src="/common/js/jquery.js"></script>
<script src="/common/js/nav_bar.js"></script>
<script nonce="<?=htmlspecialchars($nonce, ENT_QUOTES)?>">
"use strict";
$(document).ready( function() {
});
</script>
</head>
<body>
<?php require __DIR__ . '/../templates/nav_bar.php'; ?>
<main>
<h1><?=implode('<br>',$title)?></h1>
<?php if( !$currentUser->is_logged_in() ): ?>
<p>
	Please <a href="signin.php">sign in</a> using your school account.
</p>
<?php else: ?>
<ul>
<?php if( $currentUser->is_staff() !== null ): ?><li><a href="staff">Classes</a></li><?php endif; ?>
<?php if( $currentUser->is_staff(\AzSIS\Auth\MANAGER_STAFF) !== null ): ?><li><a href="manager">Manager Pages</a></li><?php endif; ?>
<?php if( $currentUser->is_staff(\AzSIS\Auth\VIEWER_STAFF | \AzSIS\Auth\MANAGER_STAFF) !== null ): ?><li><a href="view">View Aggregate Data</a></li><?php endif; ?>
<?php if( $currentUser->is_staff(\AzSIS\Auth\MONITOR_STAFF) !== null ): ?><li><a href="monitor">Monitor Student Progress</a></li><?php endif; ?>
<?php if( $currentUser->is_student() ): ?><li><a href="student">Student Pages</a></li><?php endif; ?>
<?php if( $currentUser->is_adult() ): ?><li><a href="adult">Parent/Guardian Pages</a></li><?php endif; ?>
</ul>
<?php endif; ?>
</main>
<footer>
</footer>
</body>
</html>
