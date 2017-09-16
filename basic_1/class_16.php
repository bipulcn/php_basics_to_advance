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
        echo "<br>";
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
