<!DOCTYPE html>
<html>
<head>
	<title>Logic Practice</title>
</head>
<body>
<h1>Work with numbers</h1>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$prim = new findPrime();
if($prim->isPrime(2))
	echo "2 Its a prime number";
echo "<br>";
$prim->inRange(0, 53);
echo "<br>";
print_r($prim->getDivisors(45));
echo "<br>";
print_r($prim->getFactors(128));
echo "<br>";
echo "GCD: ".$prim->gcd(35, 25);

?>

<hr>
<?php
class findPrime
{	
	function __construct()
	{
	}
	function isPrime($num) {
		for ($i=2; $i <= sqrt($num); $i++) { 
			if($num%$i===0) return false;
		}
		return true;
	}
	function inRange($i, $max) {
		if ($i<2) $i = 2;
		for ($i; $i <= $max; $i++) { 
			if($this->isPrime($i))
				echo $i.", ";
		}
	}
	function getDivisors($num) {
		$div = [];
		for ($i=2; $i <= sqrt($num) ; $i++) { 
			if ($num%$i==0) {
				$div[] = $i;
				$div[] = $num/$i;
			}
		}
		return $div;
	}
	function getFactors($num) {
		$fac = [];
		$d = 1;
		while ($num >= $d) {
			if($num%$d==0 && $d!=1) {
				$num /= $d;
				$fac[] = $d;
				$d = 1;
			}
			$d++;
		}
		return $fac;
	}
	function gcd($nm1, $nm2) {
		if($nm1<$nm2) {
			$tm = $nm1;
			$nm1 = $nm2;
			$nm2 = $tm;
		}
		if($nm1%$nm2==0) 
			return $nm2;
		else 
			return $this->gcd($nm2, $nm1%$nm2);
	}
}
?>
</body>
</html>