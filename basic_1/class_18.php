<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Basic Page Structure.</h1>
	    <p class="note">Note about the learning section.</p>
      <div class="phpOutput">
        <?php
        echo "Print Today like " . date("Y/m/d") . " or " . date("Y.m.d") . " or " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l")."<br>";
        echo "The Local time is " . date("h:i:sa")."<br>";
        date_default_timezone_set("America/New_York");
        echo "America New York time " . date("h:i:sa")."<br>";        
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  echo "Print Today like " . date("Y/m/d") . " or " . date("Y.m.d") . " or " . date("Y-m-d") . "<br>";
  echo "Today is " . date("l")."<br>";
  echo "The Local time is " . date("h:i:sa")."<br>";
  date_default_timezone_set("America/New_York");
  echo "America New York time " . date("h:i:sa")."<br>";        
?>';
echo highlight_string($code, true);
?>
      </div>
      <div class="phpOutput">
        <?php
        echo "Format our data to time format<br>";
        $d=mktime(11, 14, 54, 8, 12, 2014);
        echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
        $d=strtotime("10:30pm April 15 2014");
        echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
        $d=strtotime("tomorrow");
        echo date("Y-m-d h:i:sa", $d) . "<br>";

        $d=strtotime("next Saturday");
        echo date("Y-m-d h:i:sa", $d) . "<br>";

        $d=strtotime("+3 Months");
        echo date("Y-m-d h:i:sa", $d) . "<br>";
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  echo "Format our data to time format<br>";
  $d=mktime(11, 14, 54, 8, 12, 2014);
  echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
  $d=strtotime("10:30pm April 15 2014");
  echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
  $d=strtotime("tomorrow");
  echo date("Y-m-d h:i:sa", $d) . "<br>";

  $d=strtotime("next Saturday");
  echo date("Y-m-d h:i:sa", $d) . "<br>";

  $d=strtotime("+3 Months");
  echo date("Y-m-d h:i:sa", $d) . "<br>";
?>';
echo highlight_string($code, true);
?>
      </div>
      <div class="phpOutput">
        <?php
        echo "Show how many days left to be July 04<br>";
        $d1=strtotime("July 04");
        $d2=ceil(($d1-time())/60/60/24);
        echo "There are " . $d2 ." days until 4th of July.";
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  echo "Show how many days left to be July 04<br>";
  $d1=strtotime("July 04");
  $d2=ceil(($d1-time())/60/60/24);
  echo "There are " . $d2 ." days until 4th of July.";
?>';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
