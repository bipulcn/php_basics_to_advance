<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Class 3</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
  	<div class="container">
	    <h1>PHP starts from here.</h1>
	    <div>
		    <?php
				echo "hello world";  // basic PHP print line statement.
				$name = "Your name"; // PHP variable Declaration 
				echo "<br>"; // adding html content in PHP print statement.
				echo $name;
			?>
		</div>
		<h5>Most beautiful thing about PHP is that</h5><p class="note">It's not case sensetive on its key works. All keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are NOT case-sensitive.</p>
		<div>
			<?php
				ECHO "Hello World!<br>";
				echo "Hello World!<br>";
				EcHo "Hello World!<br>";
				echo "<div class='note'>But User defined variable are not.</div>";
				$name = "Name";
				echo "My Name is " . $name . "<br>";
				echo "My name is " . $NAME . "<br>";
				echo "My Name is " . $NaME . "<br>";
			?>
		</div>
	</div>
  </body>
</html>
