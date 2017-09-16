<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Class Practice</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
    <div class="menu">
<?php
$dir = getcwd();
$lp = strripos($dir, '/');
$dir= substr($dir, 0, $lp);

createSubList($dir, '..');

function createSubList($addr, $lnk) {
	echo "<ul>";
	$list = scandir($addr);
	$files = removeUnimportant($list);
	foreach ($files as $v) {
		if (stripos($v,'.')>0) {
			echo "<li><a href='".$lnk."/".$v."'>".substr($v, 0, strripos($v, "."))."</a></li>";
		}
		else {
			echo "<li>".$v."<br>".createSubList($addr."/".$v, $lnk."/".$v)."</li>";
		}
	}
	echo "</ul>";
}
function removeUnimportant($files) {
	$ary = ['.', '..', '.git','php','css'];
	foreach ($files as $k => $v) 
		if (in_array($v, $ary)) 
			unset($files[$k]);
	return $files;
}
?>
</div>