<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>From if to switch.</h1>
	    <p class="note">Switch works as like as several if-else statement</p>
      <pre>switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    case label3:
        code to be executed if n=label3;
        break;
    ...
    default:
        code to be executed if n is different from all labels;
}</pre>
      <p>This is how it works: First we have a single expression n (most often a variable), that is evaluated once. The value of the expression is then compared with the values for each case in the structure. If there is a match, the block of code associated with that case is executed. Use break to prevent the code from running into the next case automatically. The default statement is used if no match is found.</p>
      <div class="phpOutput">
        <?php
        $favcolor = "red";

        switch ($favcolor) {
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  $favcolor = "red";

  switch ($favcolor) {
      case "red":
          echo "Your favorite color is red!";
          break;
      case "blue":
          echo "Your favorite color is blue!";
          break;
      case "green":
          echo "Your favorite color is green!";
          break;
      default:
          echo "Your favorite color is neither red, blue, nor green!";
  }
?>';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
