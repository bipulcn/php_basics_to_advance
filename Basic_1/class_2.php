<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Class 2</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
  	<div class="container">
	    <h1>let's introduce basic css from here.</h1>
	    <p>We will not cover css in this class please consider to learn in by yourself.</p>
	    <div class="phpOutput">
    	    <?php
    			echo "hello world";  // basic PHP print line statement.
    			$name = "Your name"; // PHP variable Declaration
    			echo "<br>"; // adding html content in PHP print statement.
    			echo $name;
    		?>
    	</div>
      <div class="phpCode">
<?php
$code = '<?php
  echo "hello world";  // basic PHP print line statement.
  $name = "Your name"; // PHP variable Declaration
  echo "<br>"; // adding html content in PHP print statement.
  echo $name;
?>';
echo highlight_string($code);
?>
      </div>
  	</div>
  </body>
</html>
