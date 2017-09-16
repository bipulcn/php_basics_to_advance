<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Basic Operation on Variables</h1>
	    <p class="note">PHP supports all kinds of operation on varibales</p>
      <p>Here we are going to work with some number type variable. We will check out some basic operation like math and logical in variable.</p>
      <div class="phpOutput">
        <?php
        $x = 8.5;
        $y = 7;
        $z = 5;
        echo "x: ".$x." <br>y: ".$y;
        echo "<br>x + y = ".($x+$y);
        echo "<br>x - y = ".($x-$y);
        echo "<br>x * y = ".($x*$y);
        echo "<br>y / z = ".($y/$z);
        echo "<br>y % z = ".($y%$z);

        echo "<br><br>y > z = ".($y>$z); // returns true or 1
        echo "<br>y < z = ".($y < $z); // returns blank or flase or 0
        echo "<br>y == z = ".($y==$z); // returns blank or flase or 0
        echo "<br>y != z = ".($y!=$z); // returns true or 1

        echo "<br><br>(y += z) = ".($y+=$z);
        echo "<br>(y -= z) = ".($y-=$z);
        echo "<br>(y *= z) = ".($y*=$z);
        echo "<br>(y /= z) = ".($y/=$z);
        echo "<br>(y %= z) = ".($y%=$z);
        echo "<br> y++ = ".($y++);
        echo "<br> y = ".$y;
        echo "<br> ++y = ".(++$y);
        echo "<br> --y = ".(--$y);
        $a = true;
        $b = false;
        echo "<br><br>a = true<br>b = false";
        echo "<br> a and b = ".($a and $b);
        echo "<br> a && b = ".($a && $b);
        echo "<br> a or b = ".($a or $b);
        echo "<br> a || b = ".($a || $b);
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  $x = 8.5;
  $y = 7;
  $z = 5;
  echo "x: ".$x." <br>y: ".$y;
  echo "<br>x + y = ".($x+$y);
  echo "<br>x - y = ".($x-$y);
  echo "<br>x * y = ".($x*$y);
  echo "<br>y / z = ".($y/$z);
  echo "<br>y % z = ".($y%$z);

  echo "<br><br>y > z = ".($y>$z); // returns true or 1
  echo "<br>y < z = ".($y < $z); // returns blank or flase or 0
  echo "<br>y == z = ".($y==$z); // returns blank or flase or 0
  echo "<br>y != z = ".($y!=$z); // returns true or 1

  echo "<br><br>(y += z) = ".($y+=$z);
  echo "<br>(y -= z) = ".($y-=$z);
  echo "<br>(y *= z) = ".($y*=$z);
  echo "<br>(y /= z) = ".($y/=$z);
  echo "<br>(y %= z) = ".($y%=$z);
  echo "<br> y++ = ".($y++);
  echo "<br> y = ".$y;
  echo "<br> ++y = ".(++$y);
  echo "<br> --y = ".(--$y);
  $a = true;
  $b = false;
  echo "<br><br>a = true<br>b = false";
  echo "<br> a and b = ".($a and $b);
  echo "<br> a && b = ".($a && $b);
  echo "<br> a or b = ".($a or $b);
  echo "<br> a || b = ".($a || $b);
?>';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
