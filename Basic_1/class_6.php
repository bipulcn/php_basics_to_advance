<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Class 6 Scope of variables</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
  	<div class="container">
	    <h1>Variable Scope in PHP.</h1>
	    <p class="note">In PHP, variables can be declared anywhere in the script.
      The scope of a variable is the part of the script where the variable can be referenced/used.
      PHP has three different variable scopes:
      <ul><li>local</li>
      <li>global</li>
      <li>static</li></ul>
      </p>
      <h3>Global Variable</h3>
      <p class="note">A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:</p>
      <div class="phpOutput">
        <?php
        $x = 5; // global scope

        function myTest() {
            // using x inside this function will generate an error
            echo "<p>Variable x inside function is: $x</p>";
            echo "<p>It ount access the global variable.</p>";
        }

        myTest();

        echo "<p>Variable x outside function is: $x</p>";
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
    echo "<p>It ount access the global variable.</p>";
}

myTest();

echo "<p>Variable x outside function is: $x</p>";
?>';
echo highlight_string($code);
?>
      </div>
      <h3>Local Scope</h3>
      <p class="note">A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:</p>
      <div class="phpOutput">
        <?php
        $x = 8; // now it global
        function myTest2() {
          echo "access x: (".$x.") can not access global<br>";
          $x = 5; // local scope
          echo "<p>Variable x inside function is: $x</p>";
        }
        myTest2();

        // using x outside the function will generate an error
        echo "<p>Variable x outside function is: $x</p>";
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
$x = 8; // now it global
function myTest2() {
  echo "access x: (".$x.") can not access global<br>";
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest2();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>';
echo highlight_string($code);
?>
      </div>
	</div>
  </body>
</html>
