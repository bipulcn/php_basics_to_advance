<!DOCTYPE html>
<html>
<head>
	<title>Mysql and PHP</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
		<h1>Mysql Connect</h1>
		<?php 
		$con = mysqli_connect('localhost', 'bipul', 'tst123', 'test');
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
	</div>
</body>
</html>