<?php
include('../php/getLinks.php');
?>
    <div class="container">
    <h1>PHP starts from here.</h1>
      <div class="phpOutput">
    <?php
		echo "hello world";  // basic PHP print line statement.
		$name = "Your name"; // PHP variable Declaration
		echo "<br>"; // adding html content in PHP print statement.
		echo $name;
	?>
      </div>
      <div class="phpCode">        
<?php
$code = '<?php
  echo "hello world";  // basic PHP print line statement.
  $name = "Your name"; // PHP variable Declaration
  echo "<br>"; // adding html content in PHP print statement.
  echo $name;
?>';
echo highlight_string($code, true);
?>
      </div>
      </div>
  </body>
</html>
