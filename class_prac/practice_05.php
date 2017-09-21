<!DOCTYPE html>
<html>
<head>
	<title>Logic Practice</title>
</head>
<body>
<h1>Beauty of object Orientation Polymorphism</h1>

<hr>
<?php
interface Shape {
  public function calcArea();
}
class Circle implements Shape {
  private $radius;
   
  public function __construct($radius)
  {
    $this -> radius = $radius;
  }
  
  // calcArea calculates the area of circles 
  public function calcArea()
  {
    return $this -> radius * $this -> radius * pi();
  }
}
class Rectangle implements Shape {
  private $width;
  private $height;
   
  public function __construct($width, $height)
  {
    $this -> width = $width;
    $this -> height = $height;
  }
  
  // calcArea calculates the area of rectangles   
  public function calcArea()
  {
    return $this -> width * $this -> height;
  }
}
?>
<hr>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$circ = new Circle(3);
$rect = new Rectangle(3,4);
echo $circ -> calcArea();
echo "<br>";
echo $rect -> calcArea();

?>
</body>
</html>