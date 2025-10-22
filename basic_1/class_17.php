<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Multidimensional Array.</h1>
	    <p class="note">1D array is mostly used in any programming language. But some time its becomes necessary to use multidimensional array.</p>
      <p>Earlier in this tutorial, we have described arrays that are a single list of key/value pairs. However, sometimes you want to store values with more than one key. This can be stored in multidimensional arrays.</p>
      <p>A multidimensional array is an array containing one or more arrays. However, arrays more than three levels deep are hard to manage for most people.</p>
      <div class="phpOutput">
        <?php
        $cars = array(
              array("Volvo",22,18),
              array("BMW",15,13),
              array("Saab",5,2),
              array("Land Rover",17,15)
              );
        echo "Multidimensional looks like<br>array (";
        foreach ($cars as $k => $v) {
          echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[".$k."] => ";
          print_r($v);
        }
        echo "<br>)";
        echo "<br><br>We can access an element by two index value like <br>cars[1][0]: ".$cars[1][0];
        echo "<br>In stock: cars[1][1] = ".$cars[1][1]."<br>sold: cars[1][2] = ".$cars[1][2].".<br>";
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  $cars = array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
        );
  echo "Multidimensional looks like<br>array (";
  foreach ($cars as $k => $v) {
    echo "<br>[".$k."] => ";
    print_r($v);
  }
  echo "<br>)";
  echo "<br><br>We can access an element by two index value like <br>cars[1][0]: ".$cars[1][0];
  echo "<br>In stock: cars[1][1] = ".$cars[1][1]."<br>sold: cars[1][2] = ".$cars[1][2].".<br>";
?>';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
