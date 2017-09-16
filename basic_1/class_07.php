<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>PHP string operation</h1>
	    <p class="note">String in PHP are vary simple it got lots of function to menupulate result from string.</p>
      <div class="phpOutput">
        <?php
        $str = "Sample string to checkout string operation in PHP";
        echo $str;
        echo "<br>1. Concate this, with, ".$str;
        echo "<br>2. Our string length is ".strlen($str);
        echo "<br>3. Word count: ".str_word_count($str);
        echo "<br>4. Print reverse: ".strrev($str);
        echo "<br>5. sub string check position: ".strpos($str, 'check');
        echo "<br>6. Sub string by start position and number of character: ".substr($str, 7, 18);
        echo "<br>7. Text transform to upper: ".strtoupper($str);
        echo "<br>8. Text transform to lower: ".strtolower($str);
        echo "<br>9. Text transform to capitalize: ".ucwords($str);
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
$str = "Sample string to checkout string operation in PHP";
echo $str;
echo "<br>1. Concate this, with, ".$str;
echo "<br>2. Our string length is ".strlen($str);
echo "<br>3. Word count: ".str_word_count($str);
echo "<br>4. Print reverse: ".strrev($str);
echo "<br>5. sub string check position: ".strpos($str, \'check\');
echo "<br>6. Sub string by start position and number of character: ".substr($str, 7, 18);
echo "<br>7. Text transform to upper: ".strtoupper($str);
echo "<br>8. Text transform to lower: ".strtolower($str);
echo "<br>9. Text transform to capitalize: ".ucwords($str);
?>';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
