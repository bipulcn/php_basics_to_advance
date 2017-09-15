<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Class 7</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
  	<div class="container">
	    <h1>Global and Local Scope.</h1>
	    <p class="note"> We can access the global variable from the local space. The global keyword is used to access a global variable from within a function. To do this, use the global keyword before the variables (inside the function):</p>
      <div class="phpOutput">
        <?php
        $x = 5;
        $y = 10;
        $z;
        echo "Global <br>x: ".$x." <br>y: ".$y."<br>";
        function myTest() {
            global $x, $y, $z;
            $z = $x + $y;
            echo "<br>The Global z = x + y = ".$z;
        }

        myTest();
        echo "<br>Global z changed by the function and reslutl is: ".$z; // outputs 15
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
$x = 5;
$y = 10;
$z;
echo "Global <br>x: ".$x." <br>y: ".$y."<br>";
function myTest() {
    global $x, $y, $z;
    $z = $x + $y;
    echo "<br>The Global z = x + y = ".$z;
}

myTest();
echo "<br>Global z changed by the function and reslutl is: ".$z; // outputs 15';
echo highlight_string($code);
?>
      </div>
      <p class="note">PHP also stores all global variables in an array called $GLOBALS[index].</p>
      <div class="phpOutput">
        <?php
        $i = 5;
        $j = 10;
        $k;
        echo "Global <br>i: ".$i." <br>j: ".$j."<br>";
        function myTest2() {
            $GLOBALS['k'] = $GLOBALS['i'] + $GLOBALS['j'];
            $GLOBALS['n'] = 20;
            echo "<br>The Global k = i + j = ".$GLOBALS['k'];
        }

        myTest2();
        echo "<br>Global z changed by the function and reslutl is: ".$k; // outputs 15
        echo "<br>Here we havent declare any global variable n but it also can be accessed by Global: ".$n;
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
$i = 5;
$j = 10;
$k;
echo "Global <br>i: ".$i." <br>j: ".$j."<br>";
function myTest2() {
    $GLOBALS[\'k\'] = $GLOBALS[\'i\'] + $GLOBALS[\'j\'];
    $GLOBALS[\'n\'] = 20;
    echo "<br>The Global k = i + j = ".$GLOBALS[\'k\'];
}

myTest2();
echo "<br>Global z changed by the function and reslutl is: ".$k; // outputs 15
echo "<br>Here we havent declare any global variable n but it also can be accessed by Global: ".$n;';
echo highlight_string($code);
?>
      </div>
	</div>
  </body>
</html>
