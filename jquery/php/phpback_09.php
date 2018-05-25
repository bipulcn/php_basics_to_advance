<?php

$con = mysqli_connect('localhost', 'root', '', 'test');
		// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$res = mysqli_query($con,"SELECT now() as tm");

if (mysqli_num_rows($res) > 0) {
	while($row = mysqli_fetch_assoc($res)) {
	   echo "Time is: " . $row['tm']. "<br>";
	}
} else {
	echo "0 results";
}
mysqli_close($con);

?>