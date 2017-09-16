<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>PHP Sessions</h1>
	    <p class="note">A session is a way to store information (in variables) to be used across multiple pages. Unlike a cookie, the information is not stored on the users computer.</p>
      <h3>Start a PHP Session</h3>
      <p>A session is started with the session_start() function.</p>
      <p>Session variables are set with the PHP global variable: $_SESSION.</p>
      <p>When session start it creates a unique id for that session its called session id</p>
      <div class="phpOutput">
        <?php
        session_start();
        echo "Current session id is: ".session_id();
        echo "<br>To destroy a session we can call session destroy function.";
        session_unset(); 
        session_destroy();
        echo "<br>Lets check the seeion id: ".session_id()." its blank as session destroied<br> start session again.";
        session_start();
        echo "<br>Session id as started: ".session_id();
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  session_start();
  echo "Current session id is: ".session_id();
  echo "<br>To destroy a session we can call session destroy function.";
  session_unset(); 
  session_destroy();
  echo "<br>Lets check the seeion id: ".session_id()." its blank as session destroied<br> start session again.";
  session_start();
  echo "<br>Session id as started: ".session_id();
?>';
echo highlight_string($code, true);
?>
      </div>
      <h4>Set some session variable</h4>
      <div class="phpOutput">
        <?php
        $_SESSION['name'] = "Parash";
        echo "Insert name variable to seeion: <br>";
        print_r($_SESSION);
        echo "<br>Now include age to the session: <br>";
        $_SESSION['age'] = "24";
        print_r($_SESSION);
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  $_SESSION[\'name\'] = "Parash";
  echo "Insert name variable to seeion: <br>";
  print_r($_SESSION);
  echo "<br>Now include age to the session: <br>";
  $_SESSION[\'age\'] = "24";
  print_r($_SESSION);
?>';
echo highlight_string($code, true);
?>
      </div>
      <p>Session are important because our user login system mainly depends on the session.</p>
	</div>
  </body>
</html>
