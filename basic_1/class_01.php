<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Basic PHP code</title>
  </head>
  <body>
    <h1>PHP starts from here.</h1>
    <?php
  		echo "hello world";  // basic PHP print line statement.
  		$name = 'Your name'; // PHP variable Declaration
  		echo "<br>"; // adding html content in PHP print statement.
      ?>
      <h1>Out of php</h1>
      <?php
  		echo $name."<br>";
      $i = '32.32';
      $j = 12.32;
      $k = $i+$j;
      echo $i." ".$j."<br>";
      echo $k;
  	?>
  </body>
</html>
