<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Function Structure in PHP.</h1>
	    <p class="note">The real power of PHP comes from its functions; it has more than 1000 built-in functions.</p>
      <p>A function is a block of statements that can be used repeatedly in a program. A function will not execute immediately when a page loads. A function will be executed by a call to the function.</p>
      <p>We have used several PHP built in function to manipulate string. Now we will build our own. Basic structure is</p>
      <pre>function functionName() {
    code to be executed;
}</pre>
      <div class="phpOutput">
        <?php
        echo "Here we are declares a function.";
        function testFunc() {
          echo "<br>This is a sample function executed.";
        }
        echo "<br>Now we are calling our function.";
        testFunc();
        echo "<br>We are calling it again.".testFunc();
        echo "<br><br>Now pass a paramente to the function";
        function arguFunc($name) {
          echo "<br>Welcome ".$name;
        }
        arguFunc("John");
        arguFunc("Simi");
        arguFunc("Jonathon");
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  echo "Here we are declares a function.";
  function testFunc() {
    echo "<br>This is a sample function executed.";
  }
  echo "<br>Now we are calling our function.";
  testFunc();
  echo "<br>We are calling it again.".testFunc();
  echo "<br><br>Now pass a paramente to the function";
  function arguFunc($name) {
    echo "<br>Welcome ".$name;
  }
  arguFunc("John");
  arguFunc("Simi");
  arguFunc("Jonathon");
?>';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
