<?php
declare(strict_types=1);
namespace AzSIS\NavBar;

// Get one level up of current file.
function get_back(string $current_file): string {
    $files = explode('/', $current_file);
    // Remove current file name.
    $file = array_pop($files);
    if( $file === 'index.php' ) {
        // Current file is index, so go one directory up.
        array_pop($files);
        if( empty($files) )
            // Current file is top-level index, but we need a parent directory for implode to work properly.
            array_push($files, '');
    }
    // Ensure result ends in '/'.
    array_push($files, '');
    return implode('/', $files);
}
?>
<nav class="no-print">
	<ul>
<?php if( $currentUser->is_logged_in() ):?>
		<li>
		<ul>
			<li><span>&#x1F9ED;</span></li>
			<li><a href="/">Home</a></li>
			<li><a href="<?=htmlspecialchars(get_back($_SERVER['SCRIPT_NAME']), ENT_NOQUOTES | ENT_HTML5, 'UTF-8')?>">Back</a></li>
		</ul>
		</li>
		<li>
		<ul>
			<li><span>&#x1F5FA;</span></li>
<?php
// Print navigational links requested in the environment.
$linksText = getenv('AZSIS_NAVIGATOR_LINKS');
if( $linksText === false )
    $links = [];
else {
    $fullLinks = explode('|', $linksText);
    if( count($fullLinks)%2 !== 0 )
        throw new \RuntimeException('Invalid Links for Navigation Bar');
    $links = array_chunk($fullLinks, 2);
}
foreach( $links as [$url, $txt] ): ?>
			<li><a href="<?=htmlspecialchars($url, ENT_NOQUOTES | ENT_HTML5, 'UTF-8')?>" target="_blank" rel="noopener noreferrer"><?=htmlspecialchars($txt, ENT_NOQUOTES | ENT_HTML5, 'UTF-8')?></a></li>
<?php endforeach; ?>
		</ul>
		</li>
		<li class="right">
		<ul>
			<li><span>&#x2630;</span></li>
			<li class="right"><a class="photo" href="https://accounts.google.com/"><img referrerpolicy="no-referrer" src="<?=htmlspecialchars($currentUser->picture_url(), ENT_NOQUOTES | ENT_HTML5, 'UTF-8')?>" alt="<?=htmlspecialchars($currentUser->display_name(), ENT_NOQUOTES | ENT_HTML5, 'UTF-8')?>"></a></li>
			<li><a href="/settings.php">Settings</a></li>
			<li><form method="post" action="/signout.php"><button type="submit">Sign out</button><input type="hidden" name="sign_out_csrf_token" value="<?=htmlspecialchars($_SESSION['sign_out_csrf_token'] ?? '', ENT_QUOTES | ENT_HTML5, 'UTF-8')?>"></form></li>
		</ul>
		</li>
<?php else:?>
		<li class="right"><a href="/signin.php">Sign In</a></li>
<?php endif;?>
	</ul>
</nav>
