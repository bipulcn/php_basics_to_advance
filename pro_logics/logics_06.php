<!DOCTYPE html>
<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Class example</title>
  </head>
  <body>
    <?php
//
class first
{
  public $name = '';
  function __construct()
  {
    $this->name = "first Calss";
  }

  function setName($nm) {
    $this->name = $nm;
  }
}


class second extends first
{

}


$obj = new second();
// var_dump($obj);
$obj->setName("Second Class");
echo $obj->name;





     ?>
     <h1>Hell world</h1>
  </body>
</html>
