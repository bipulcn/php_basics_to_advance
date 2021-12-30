<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Get Directory</title>
  </head>
  <style type="text/css">
  	body { width: 99%; margin: 0; padding: 0 0.5%; }
  	.f_hold { display: flex; flex-flow: wrap; }
  	.f_unit { width: 22%; background: rgba(0, 100, 200, 0.2); padding: 2% 1%; margin: 0.5%; }
  </style>
  <body>
    <h1>Get System font infos.</h1>
    <?php
    $list = scandir("/Library/Fonts");

	$files = removeUnimportant($list);
    // print_r($files);
	?>
	<div class="f_hold">
	<?php
	foreach ($files as $key => $value) {
		$v = explode(".", $value);
		echo "<div class='f_unit' style='font-family:\"".$v[0]."\";'><h2>".$v[0]."</h2>";
		echo "<div>1 2 3 4 5 6 7 8 9 0<br> \" \' : ; \" \" <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et fringilla nibh. Ut ut neque molestie, cursus velit id, tempor ante. In eget viverra leo.</p><p>Aliquam urna orci, viverra ut elit eget, ullamcorper malesuada metus. Sed metus quam, imperdiet sed est facilisis, vehicula egestas turpis. Nulla aliquet nulla nec turpis dignissim eleifend. Quisque euismod placerat dictum.</p></div>";
		echo "</div>";
	}
	?>
	</div>
	<?php
	function removeUnimportant($files) {
		$ary = ['.', '..', '.git','php','css','.DS_Store'];
		foreach ($files as $k => $v)
			if (in_array($v, $ary))
				unset($files[$k]);
		return $files;
	}
    ?>
  </body>
</html>