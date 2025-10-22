<?php
class parClass
{	
	function __construct()
	{
		echo "It was also called<br>";
	}
	function whyNotThis() {
		echo "its not calling from child<br>";
	}
}

class chiClass extends parClass
{	
	function __construct()
	{
		echo "is this was calling<br>";
	}
	function printIt() {
		echo "its goit to be printed<br>";
	}
}
$obj = new chiClass();
$obj->printIt();
$obj->whyNotThis();
?>