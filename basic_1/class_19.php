<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Create Cookies With PHP</h1>
	    <p class="note">A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.</p>
      <p>A cookie is created with the setcookie() function.</p>
      <pre>setcookie(name, value, expire, path, domain, secure, httponly);</pre>
      <div class="phpOutput">
        <?php
        if(count($_COOKIE) > 0) {
            echo "Cookies are enabled.<br><br>";
        } else {
            echo "Cookies are disabled.<br><br>";
        }
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  if(count($_COOKIE) > 0) {
      echo "Cookies are enabled.<br><br>";
  } else {
      echo "Cookies are disabled.<br><br>";
  }
?>';
echo highlight_string($code, true);
?>
      </div>
      <div class="phpOutput">
        <?php
        if(rand()%2) {
          $cookie_name = "user";
          $cookie_value = "John Doe";
        }
        else {
          $cookie_name = "user";
          $cookie_value = "Abraham Sujy";
        }
        echo "Cookie will set user value ".$cookie_value."<br>";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!<br>";
        } else {
            echo "It showing saved value in cookie<br>";
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
        echo "<br>On refresh it will show new value.";
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  if(rand()%2) {
    $cookie_name = "user";
    $cookie_value = "John Doe";
  }
  else {
    $cookie_name = "user";
    $cookie_value = "Abraham Sujy";
  }
  echo "Cookie will set user value ".$cookie_value."<br>";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
  if(!isset($_COOKIE[$cookie_name])) {
      echo "Cookie named \'" . $cookie_name . "\' is not set!<br>";
  } else {
      echo "It showing saved value in cookie<br>";
      echo "Cookie \'" . $cookie_name . "\' is set!<br>";
      echo "Value is: " . $_COOKIE[$cookie_name];
  }
  echo "<br>On refresh it will show new value.";
?>';
echo highlight_string($code, true);
?>
      </div>
      <div class="phpOutput">
        <?php
        echo "To delete a cookie set time to -1 hour";
        setcookie("user", "", time() - 3600);
        echo "<br>Value is: ".$_COOKIE[$cookie_name];
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
  echo "To delete a cookie set time to -1 hour";
  setcookie("user", "", time() - 3600);
  echo "<br>Value is: ".$_COOKIE[$cookie_name];
?>';
echo highlight_string($code, true);
?>
      </div>
	</div>
  </body>
</html>
