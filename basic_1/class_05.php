<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Basic Variables in PHP.</h1>
	    <p class="note">In PHP, a variable starts with the $ sign, followed by the name of the variable:</p>
      <div class="phpOutput">
        <?php
          $txt = "Hello world!";
          $x = 5;
          $y = 10.5;
          echo $txt." it will break from here<br>New line";
          echo "<p>You may notice that we use . to concate a variable with any other strings.<h4>Now</h4>";
          echo "The addition of two number is ".($x+$y);
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  $txt = "Hello world!";
  $x = 5;
  $y = 10.5;
  echo $txt." it will break from here<br>New line";
  echo "<p>You may notice that we use . to concate a variable with any other strings.<h4>Now</h4>";
  echo "The addition of two number is ".($x+$y);
?>';
echo highlight_string($code, true);
?>
      </div>
      <p>Here you may notice that we have added two number one is integer and another is float but result is float. PHP can parse number from any thing. we will check it in next part.</p>
      <h3>Beauty of PHP</h3>
      <div class="phpOutput">
        <?php
          $txtNum = "this is a text with number 10";
          $numTxt = "10 in the text";
          $num = 23;
          $result = $txtNum + $num;
          echo "It prints only the number <br>".$result;
          $result = $numTxt + $num;
          echo "<br>Php can extract number from string if its at begining of the text<br>".$result;
          echo "<p>It show some Worning or Notice This are not error. so it will generate the output with worning and notice.</p>";
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  $txtNum = "this is a text with number 10";
  $numTxt = "10 in the text";
  $num = 23;
  $result = $txtNum + $num;
  echo "It prints only the number <br>".$result;
  $result = $numTxt + $num;
  echo "<br>Php can extract number from string if its at begining of the text<br>".$result;
  echo "<p>It show some Worning or Notice This are not error. so it will generate the output with worning and notice.</p>";
?>';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
