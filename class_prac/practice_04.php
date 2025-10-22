<!DOCTYPE html>
<html>
<head>
	<title>Logic Practice</title>
</head>
<body>
<h1>Beauty of object Orientation?</h1>

<hr>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

class car extends vehicle
{
	function __construct($s, $w)
	{
		$this->speed = $s;
		$this->weight = $w;
	}

	function parChild() {
		echo "Child methods";
	}

	function get_speed() {
		echo get_class().", is calling ";
		$this->print_speed();
	}
}

class vehicle
{
	var $speed;
	var $weight;
	function __construct()
	{
	}

	function print_speed() {
		echo "From: ".get_class()." The speed: ".$this->speed;
	}

	function parChild() {
		echo "parent method";
	}
}


$obj = new car(10, 30);
$obj->get_speed();
echo "<br>";
$obj->parChild();
?>

</body>
</html>
