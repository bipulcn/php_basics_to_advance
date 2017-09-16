<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Work with loop while</h1>
	    <p class="note">Loops are the most import terms in any programing language as like as condition statement. Some loops are while, for, foreach</p>
      <p>Often when you write code, you want the same block of code to run over and over again in a row. Instead of adding several almost equal code-lines in a script, we can use loops to perform a task like this.</p>
      <p>The while loop executes a block of code as long as the specified condition is true.</p>
      <div class="phpOutput">
        <?php
        echo "Basic while structure:";
        $i = 6;
        while ($i <= 10) {  // it will check if the number is less the 10 or equal. else it will stop ettartion. 
          echo "<br>value of i: ".$i;
          $i++; // we have increment variable $i otherwise it will create a infinite loop
        }
        echo "<br><br>While with if condiont.";
        $j = 6;
        while(true) {
          echo "<br>value of i: ".$j;
          if($j>=10) break;  // here we are breaking the loop by chacking condition. This is the same thing as the above exmaple
          $j++;
        }
        echo "<br><br>Do While";
        $x = 6; 
        do {
            echo "<br>The number is: $x";
            $x++;
        } while ($x <= 10);
        echo "<br><br>It will execute one time.";
        do {
            echo "<br>The number is: $x";
            $x++;
        } while ($x <= 5);
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  echo "Basic while structure:";
  $i = 1;
  while ($i <= 10) {  // it will check if the number is less the 10 or equal. else it will stop ettartion. 
    echo "<br>value of i: ".$i;
    $i++; // we have increment variable $i otherwise it will create a infinite loop
  }

  echo "<br><br>While with if condiont.";
  $j = 1;
  while(true) {
    echo "<br>value of i: ".$j;
    if($j>=10) break;  // here we are breaking the loop by chacking condition. This is the same thing as the above exmaple
    $j++;
  }

  echo "<br><br>Do While";
  $x = 6; 
  do {
      echo "<br>The number is: $x";
      $x++;
  } while ($x <= 10);
  echo "<br><br>It will execute one time.";
  do {
      echo "<br>The number is: $x";
      $x++;
  } while ($x <= 5);
?>';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
