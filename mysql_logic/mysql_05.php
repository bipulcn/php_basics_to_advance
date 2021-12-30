<!DOCTYPE html>
<html>
<head>
	<title>Mysql and PHP</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
		<h1>MySQL PDO</h1>
		<?php		
			error_reporting(E_ALL);
			ini_set('display_errors', '1');

			$servername = "localhost";
			$username = "bipul";
			$password = "tst123";
		    $db = new PDO("mysql:host=$servername;dbname=test", $username, $password);
		    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT * FROM pet";
			$reslt = $db->query($sql); //invalid query!
		    $results = $reslt->fetchAll(PDO::FETCH_ASSOC);
		    echo "<table width=50%><tr><th>Name</th><th>Species</th><th>Owner</th></tr>";
		    foreach ($results as $row) {
		    	echo "<tr><td>".$row['name']."</td><td>".$row['species']."</td><td>".$row['owner']."</td></tr>";
		    }
		    echo "</table>";
		?>
	</div>
</body>
</html>