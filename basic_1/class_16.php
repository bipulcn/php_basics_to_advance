<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Array Functions</h1>
	    <p class="note">There are sevaral array function which are really useful when you are writing codes.</p>
      <p>Number of such function list are huge we will watch out some most comonly used functions like..</p>
      <div class="phpOutput">
        <?php
          $cars = array("Volvo", "BMW", "Toyota","Austin");
          echo '$cars = array("Volvo", "BMW", "Toyota","Austin");';
          echo "<br>Print number of element in cars are ".count($cars)."<br>or <br>you can do like sizeof cars array is ".sizeof($cars);
          echo "<br><br>Short the array alphabaticaly by value: ";
          sort($cars);
          echo "<br>first one is: ".$cars[0]." <br>last one is: ".$cars[3];
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  $cars = array("Volvo", "BMW", "Toyota","Austin");
  echo \'$cars = array("Volvo", "BMW", "Toyota","Austin");\';
  echo "<br>Print number of element in cars are ".count($cars)."<br>or <br>you can do like sizeof cars array is ".sizeof($cars);
  echo "<br><br>Short the array alphabaticaly by value: ";
  sort($cars);
  echo "<br>first one is: ".$cars[0]." <br>last one is: ".$cars[3];
?>';
echo highlight_string($code, true);
?>
      </div>
      <div class="phpOutput">
        <?php
          echo "Even you can unsort the array. you also can random the array and how we will print the full array in raw. with print_r() statement<br>";
          shuffle($cars);
          print_r($cars);
          $kcars = array("car1"=>'Volvo', "car2"=>'BMW', "car3"=>'Toyota', "car4"=>'Austin');
          echo "<br><br>Merge two array into one.<br>";
          $numary1 = array(3, 5, 9);
          $numary2 = array(8,3,4);
          $nums = array_merge($numary2,$numary1);
          print_r($nums);
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  echo "Even you can unsort the array. you also can random the array and how we will print
        the full array in raw. with print_r() statement<br>";
  shuffle($cars);
  print_r($cars);
  $kcars = array("car1"=>\'Volvo\', "car2"=>\'BMW\', "car3"=>\'Toyota\', "car4"=>\'Austin\');
  echo "<br><br>Merge two array into one.<br>";
  $numary1 = array(3, 5, 9);
  $numary2 = array(8,3,4);
  $nums = array_merge($numary2,$numary1);
  print_r($nums);
?>';
echo highlight_string($code, true);
?>
      </div>
      <div class="phpOutput">
        <?php
          echo "Slice one array. by starting 1 point and numbers of element 2.<br>";
          print_r(array_slice($nums,1,2));
          echo "<br>By starting point 3 and rest element.<br>";
          print_r(array_slice($nums,3));
          echo "<br>By counting element from end here 4.<br>";
          print_r(array_slice($nums,-4));
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  echo "Slice one array. by starting 1 point and numbers of element 2.<br>";
  print_r(array_slice($nums,1,2));
  echo "<br>By starting point 3 and rest element.<br>";
  print_r(array_slice($nums,3));
  echo "<br>By counting element from end here 4.<br>";
  print_r(array_slice($nums,-4));
?>';
echo highlight_string($code, true);
?>
      </div>
      <div class="phpOutput">
        <?php
          echo "Convert a 1D array in to 2D array by numbers.";
          $mcars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
          $cank = array_chunk($mcars,3);
          foreach ($cank as $key => $value) {
            echo "<br>[".$key."] (";
            print_r($value);
            echo ")";
          }
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  echo "Convert a 1D array in to 2D array by numbers.";
  $mcars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
  $cank = array_chunk($mcars,3);
  foreach ($cank as $key => $value) {
    echo "<br>[".$key."] (";
    print_r($value);
    echo ")";
  }
?>';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
