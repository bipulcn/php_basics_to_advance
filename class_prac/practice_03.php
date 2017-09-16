<?php
include('../php/getLinks.php');
?>
  	<div class="container">
	    <h1>Object Oriented PHP Begins.</h1>
	    <p class="note">Here we are trying to acess two kind of variable in two different way. They are only access by in this way.</p>
      <div class="phpOutput">
        <?php
        class accessVariable
        {
          public static $var1 = 0;
          public $var2 = 0;
          function __construct()
          {
            echo "First calling variable: ".$this::$var1;
            $this::$var1++;
            echo "<br>Second time Calling Variable: ".$this::$var1;
            echo "<br>Second Variable is: ".$this->var2;
            $this->var2++;
            echo "<br>Second time calling Second Variable: ".$this->var2;
          }
        }

        $obj = new accessVariable();
        echo "<br><br>Now from outside class";
        echo "<br>Access Public first Variable: ".$obj::$var1;
        echo "<br>Access Public second Variable: ".$obj->var2;
        echo "<br><br>Now create another object<br>";
        $obj2 = new accessVariable();
        ?>
      </div>
      <div class="phpCode">
<?php
$code = '<?php
class clsName
{
  function __construct()
  {
    echo "Class starts from here.";
  }
}

$obj = new clsName();
?>';
echo highlight_string($code);
?>
      </div>
      <p>Next try to create function. how much do you know about functions.</p>
	</div>

  </body>
</html>
