<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Condition state ment</h1>
	    <p class="note">Here we will cover the basic of Condition statement.</p>
      <p>Use the if statement to specify a block of JavaScript code to be executed if a condition is true. Use the else statement to specify a block of code to be executed if the condition is false.</p>
      <pre>if (condition) {
    block of code to be executed if the condition is true
} else { 
    block of code to be executed if the condition is false
}</pre>
      <div class="phpOutput">
        <?php
        $a = true;
        $b = false;
        echo "a = true<br>b = false";
        if ($a) {
          echo "<br>Its showing because a is true Condition";
        }
        if($b) {
          echo "<br>This part will not be printed";
        }
        else {
          echo "<br>This part going to be displayed on the screen because b is false and its executiong else part.";
        }
        if($a && $b) {
          echo "<br>This part will not be printed";
        }
        else {
          echo "<br>This part going to be displayed on the screen because a is true b is false and their and operation (a && b) is false";
        }
        if($a || $b) {
          echo "<br>This part going to be displayed on the screen because a is true b is false and their or operation (a || b) is true";
        }
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  $a = true;
  $b = false;
  echo "a = true<br>b = false";
  if ($a) {
    echo "<br>Its showing because a is true Condition";
  }
  if($b) {
    echo "<br>This part will not be printed";
  }
  else {
    echo "<br>This part going to be displayed on the screen because b is false and its executiong else part.";
  }
  if($a && $b) {
    echo "<br>This part will not be printed";
  }
  else {
    echo "<br>This part going to be displayed on the screen because a is true b is false and their and operation (a && b) is false";
  }
  if($a || $b) {
    echo "<br>This part going to be displayed on the screen because a is true b is false and their or operation (a || b) is true";
  }
?>';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
