<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Array in PHP.</h1>
	    <p class="note">An array stores multiple values in one single variable. Array made the coding beautiful.</p>
      <pre>
  $array_name = array('value1', 'value2', 'value3');
      </pre>
      <div class="phpOutput">
        <?php
        $cars = array("Volvo", "BMW", "Toyota","Austin");
        echo "I like " . $cars[0] . ", " . $cars[1] . ", " . $cars[2] .  " and " . $cars[3] . ".";
        echo "<br><br>Access element through for loop: we are going to use function sizeof to find array size.";
        for ($i=0; $i < sizeof($cars); $i++) {
          echo "<br>".($i+1).". ".$cars[$i];
        }
        echo "<br><br>Again access by loop foreach: ";
        foreach ($cars as $key => $value) {
          echo "<br>".($key+1).". ".$value;
        }
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  $cars = array("Volvo", "BMW", "Toyota","Austin");
  echo "I like " . $cars[0] . ", " . $cars[1] . ", " . $cars[2] .  " and " . $cars[3] . ".";
  echo "<br><br>Access element through for loop: we are going to use function sizeof to find array size.";
  for ($i=0; $i < sizeof($cars); $i++) {
    echo "<br>".($i+1).". ".$cars[$i];
  }
  echo "<br><br>Again access by loop foreach: ";
  foreach ($cars as $key => $value) {
    echo "<br>".($key+1).". ".$value;
  }
?>';
echo highlight_string($code, true);
?>
      </div>
      <p>Array with key value.</p>
      <pre>$array_name = array("car1"=>'Volvo', "car2"=>'BMW', "car3"=>'Toyota', "car4"=>'Austin')</pre>
      <div class="phpOutput">
        <?php
          echo "Cars list";
          $cars = array("car1"=>'Volvo', "car2"=>'BMW', "car3"=>'Toyota', "car4"=>'Austin');
          foreach ($cars as $key => $value) {
            echo "<br>".$key." - ".$value;
          }
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  echo "Cars list";
  $cars = array("car1"=>\'Volvo\', "car2"=>\'BMW\', "car3"=>\'Toyota\', "car4"=>\'Austin\');
  foreach ($cars as $key => $value) {
    echo "<br>".$key." - ".$value;
  }
?>';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
