<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Work with loop while</h1>
	    <p class="note">Loops are the most import terms in any programing language as like as condition statement. Some loops are while, for, foreach.</p>
      <p>PHP for loops execute a block of code a specified number of times. The for loop is used when you know in advance how many times the script should run.</p>
      <pre>for (init counter; test counter; increment counter) {
    code to be executed;
}</pre>
      <div class="phpOutput">
        <?php
        echo "General for loop<br>";
        for ($x = 6; $x <= 10; $x++) {
            echo "The number is: $x <br>";
        } 
        echo "<br>Now from backword<br>";
        for ($x = 16; $x > 10; $x--) {
            echo "The number is: $x <br>";
        } 
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  echo "General for loop<br>";
  for ($x = 6; $x <= 10; $x++) {
      echo "The number is: $x <br>";
  } 
  echo "<br>Now from backword<br>";
  for ($x = 16; $x > 10; $x--) {
      echo "The number is: $x <br>";
  } 
?>';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
