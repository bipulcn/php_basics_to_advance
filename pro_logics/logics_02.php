<!DOCTYPE html>
<html>
<head>
	<title>Logic Practice</title>
</head>
<body>
<h1>Print all permutation of String both iterative and Recursive way?</h1>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$str = "abcdefg";
echo "<h3>".$str."</h3>";
$obj = new permutation();
$obj->parmAry($str, "");
$obj->displayary();
?>

<hr>
<?php
class permutation
{
	var $aryp = [];
	function __construct()
	{
	}
	function parm($str, $old){
		$ary = str_split($str);
		if (count($ary)<=1) {
			echo $old.$ary[0].", ";
			return true;
		}
		else {
			for ($i=0; $i < count($ary); $i++) {
				$tmp = $ary;
				unset($tmp[$i]);
				$this->parm(join("",$tmp), $old.$ary[$i]);
			}
		}
	}

	function parmAry($str, $old){
		$ary = str_split($str);
		if (count($ary)<=1) {
			$this->aryp[] = $old.$ary[0];
			return $old.$ary[0];
		}
		else {
			for ($i=0; $i < count($ary); $i++) {
				$tmp = $ary;
				unset($tmp[$i]);
				$this->parmAry(join("",$tmp), $old.$ary[$i]);
			}
		}
	}
	function displayary() {
		echo count($this->aryp)." Numbers<br>";
		foreach ($this->aryp as $v) {
			echo $v.", ";
		}
	}
}
?>
</body>
</html>