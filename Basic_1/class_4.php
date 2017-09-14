<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Class 4</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
  	<div class="container">
	    <h1>Basic Variables in PHP.</h1>
	    <p data-label="Note" class="note">You can declare any variable starting with $ . That it $name, $price, $var are all variables.</p>
      <div class="phpCode">
<?php
$code = '<?php
  $txt = "i-evoke.com";
  echo "I love $txt!";
?>';
echo highlight_string($code);
?>
      </div>
      <div class="phpOutput">
        <?php
          $txt = "i-evoke.com";
          echo "I love $txt!";
        ?>
      </div>
      <h4>Or</h4>
      <p class="note">You can print like bellow. I will recomended you to follow the folling style.</p>
      <div class="phpCode">
        <?php
        $code = '<?php
  echo "I love " . $txt . "!";
?>';
        echo highlight_string($code);
        ?>
      </div>
      <div class="phpOutput">
        <?php
          echo "I love " . $txt . "!";
        ?>
      </div>
	</div>
  </body>
</html>
