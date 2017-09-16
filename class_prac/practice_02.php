<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Object Oriented PHP Begins.</h1>
	    <p class="note">We are trying to access some variable from PHP class. you know in class, variable are binded in the object.</p>
      <p>We can access variable by calling the variable name next to object by -> symble. For static variable we are using the :: sign to access the variable.</p>
      <p class="note">We will use the comple name that is like $variabel.</p>
      <div class="phpOutput">
        <?php
        class manVariable
        {
          public static $var1 = 0;
          function __construct()
          {
            echo "First calling variable: ".$this::$var1;
            $this::$var1++;
            echo "<br>Second time Calling Variable: ".$this::$var1;
          }
        }

        $obj = new manVariable();
        echo "<br>Access Public Variable: ".$obj::$var1;
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
class manVariable
{
  public static $var1 = 0;
  function __construct()
  {
    echo "First calling variable: ".$this::$var1;
    $this::$var1++;
    echo "<br>Second time Calling Variable: ".$this::$var1;
  }
}

$obj = new manVariable();
echo "<br>Access Public Variable: ".$obj::$var1;
?>';
echo highlight_string($code);
?>
      </div>
      <p>Its so easy. Let us make it little complex so that it can make our work simple. </p>
	</div>

  </body>
</html>
