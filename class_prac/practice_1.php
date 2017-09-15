<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Class practice one: starting</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
  	<div class="container">
	    <h1>Object Oriented PHP Begins.</h1>
	    <p class="note">I know that you already have clear idea about PHP basics: functions, variables, conditionals and loops.</p>
      <p>Classes are the blueprints for php objects – more on that later. One of the big differences between functions and classes is that a class contains both data (variables) and functions that form a package called an: ‘object’.</p>
      <p>What we are watching here is the varry basic of PHP class structure. You can create class at any where in PHP page. But there is common paractice that you will start class indifferent file. Whene ever you need that class you will include that file to attach them in the file. You can create object fromt that class.</p>
      <div class="phpOutput">
        <?php
        class clsName
        {
          function __construct()
          {
            echo "Class starts from here.";
          }
        }

        $obj = new clsName();
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
      <p>Its so easy. Let us make it little complex so that it can make our work simple. </p>
	</div>

  </body>
</html>
