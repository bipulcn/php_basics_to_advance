<?php
include('../php/getLinks.php');
?>
  	<div class="container">
      <h1>Some basics about PHP</h1>
		<h5>Most beautiful thing about PHP is that</h5><p class="note">It's not case sensetive on its key works. All keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are NOT case-sensitive.</p>
  		<div class="phpOutput">
  			<?php
  				ECHO "Hello World!<br>";
  				echo "Hello World!<br>";
  				EcHo "Hello World!<br>";
  				echo "<div class='note'>But User defined variable are not.</div>";
  				$name = "Name";
  				echo "My Name is " . $name . "<br>";
  				echo "My name is " . $NAME . "<br>";
  				echo "My Name is " . $NaME . "<br>";
  			?>
  		</div>
        <div class="phpCode">
  <?php
  $code = '<?php
    ECHO "Hello World!<br>";
    echo "Hello World!<br>";
    EcHo "Hello World!<br>";
    echo "<div class=\'note\'>But User defined variable are not.</div>";
    $name = "Name";
    echo "My Name is " . $name . "<br>";
    echo "My name is " . $NAME . "<br>";
    echo "My Name is " . $NaME . "<br>";
  ?>';
  echo highlight_string($code, true);
  ?>
        </div>
	</div>
  </body>
</html>
