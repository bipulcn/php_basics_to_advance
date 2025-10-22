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
		error_reporting(E_ALL);
		ini_set('display_errors', '1');

		$servername = "localhost";
		$username = "bipul";
		$password = "tst123";

		try {
		    $db = new PDO("mysql:host=$servername;dbname=test", $username, $password);
		    // set the PDO error mode to exception
		    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    echo "Connected successfully"; 
		} catch(PDOException $e)
	    {
	    	echo "Connection failed: " . $e->getMessage();
	    }
		$sql = "SELECT now() as tm";
		echo "<br>".$sql;
		try {
		    //connect as appropriate as above
		    $reslt = $db->query($sql); //invalid query!
		    $results = $reslt->fetchAll(PDO::FETCH_ASSOC);
		    // print_r($reslt);
		    echo "<br>Current time is ".$results[0]['tm'];
		    foreach ($results as $row) {
		    	echo "<br> Time again: ".$row['tm']."<br>";
		    	print_r($row);
		    }
		} catch(PDOException $ex) {
		    echo "An Error occured!"; //user friendly message
		}
		?>
	</div>
</body>
</html>