<?php
$post = file_get_contents('php://input');
$json = json_decode($post);
$bod = $json->bod;
$output[] = $bod;
$con = mysqli_connect('localhost', 'root', '', 'test');
		// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$res = mysqli_query($con,"SELECT now() as tm");
$dif = mysqli_query($con,"SELECT DATEDIFF(now(), '".$bod."') as tm");
$output[] = "SELECT DATEDIFF(now(), '".$bod."') as tm";
if (mysqli_num_rows($res) > 0) {
	while($row = mysqli_fetch_assoc($res)) {
	   $output[] = $row['tm'];
	}
} else {
	echo "0 results";
}
if (mysqli_num_rows($dif) > 0) {
	while($row = mysqli_fetch_assoc($dif)) {
	   $output[] = $row['tm'];
	}
} else {
	echo "0 results";
}
mysqli_close($con);

echo json_encode($output);
// echo "it Just received data <br><q>".$dta."</q> <br>by post.";
?>