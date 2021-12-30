<!DOCTYPE html>
<html>
<head>
	<title>Sqlite practice</title>
</head>
<body>
	<h3>Sqlite Test</h3>
	<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);


$database = new SQLite3('./db/image_1.sqlite');
$db = new PDO('sqlite:db/image_1.sqlite', null, null, array(PDO::ATTR_PERSISTENT => true));
$db->query('CREATE TABLE IF NOT EXISTS board (row INTEGER, column INTEGER, clr INTEGER, clg INTEGER, clb INTEGER)');
// for($r=0; $r<1024, $r++){
// 	for($c=0; $c<786, $c++){
// 		$qur = $db->prepare("insert into board (row, column, clr, clg, clb) values (?, ?, 1, 1, 1)");
// 		$qur->execute(array($r, $c));
// 	}
// }
for ($r=156; $r < 1024; $r++) { 
	for ($c=0; $c < 768; $c++) { 
		$qur = $db->prepare("insert into board (row, column, clr, clg, clb) values (?, ?, 1, 1, 1)");
		// $qur->execute(array($r, $c));
	}
}
$statement = $db->query("SELECT * FROM board");
$row = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($row as $rw) {
	var_dump($rw);
	echo "<br>";
}
?>

</body>
</html>