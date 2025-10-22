<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Form are for PHP</h1>
	    <p class="note">PHP can collect the information passed through form.</p>
      <div class="phpOutput">
        <form method="post" target="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          Name: <input type="text" name="user" value="<?php echo $_POST['user'];?>"><br>
          Date of Birth: <input type="text" name="birthyear" value="<?php echo $_POST['birthyear'];?>" placeholder='1999'><br>
          <input type="submit" name="submit" value="Submit"><br>
        </form>
        <?php
        if(isset($_POST['submit'])) {
          echo "User name: ".$_POST['user'];
          echo "<br>Your age is: ".(date('Y')-$_POST['birthyear']);
        }
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<form method="post" target="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="user" value="<?php echo $_POST[\'user\'];?>"><br>
    Date of Birth: <input type="text" name="birthyear" value="<?php echo $_POST[\'birthyear\'];?>" placeholder=\'1999\'><br>
    <input type="submit" name="submit" value="Submit"><br>
  </form>
  <?php
  if(isset($_POST[\'submit\'])) {
    echo "User name: ".$_POST[\'user\'];
    echo "<br>Your age is: ".(date(\'Y\')-$_POST[\'birthyear\']);
  }
?>';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
