<!DOCTYPE html>
<html>
<head>
	<title>Sqlite practice</title>
</head>
<body>
	<h3>Sqlite Test</h3>
	<?php
// phpinfo();
// check phpinfo(); if pdo_sqlite available
// First of all have to install phpX.Y-sqlite
// sudo apt-get install php7.4-sqlite
// remove ; from the line of extension for sqlite inside the php.ini file

$db = new PDO('sqlite:tests.db', null, null, array(PDO::ATTR_PERSISTENT => true));
$db->query('CREATE TABLE IF NOT EXISTS people (person_id INTEGER PRIMARY KEY AUTOINCREMENT, first_name text NOT NULL, last_name text NOT NULL)');
// $db->query("insert into people (first_name, last_name) values ('Bipul', 'Nath')");
$statement = $db->query("SELECT * FROM people");
$row = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($row as $rw) {
	var_dump($rw);
	echo "<br>";
}




// $database = new SQLite3('./db/myDatabase.sqlite');
// $db = new PDO('sqlite:db/image_1.sqlite', null, null, array(PDO::ATTR_PERSISTENT => true));
// $db->query('CREATE TABLE IF NOT EXISTS board (row INTEGER, column INTEGER, clr INTEGER, clg INTEGER, clb INTEGER)');
// for($r=0; $r<1024, $r++)
// 	for($c=0; $c<786, $c++){
// 			// $qur = $db->prepare("insert into board (row, column, clr, clg, clb) values (?, ?, 1, 1, 1)");
// 			// $qur->execute(array($r, $c));
// 		}
// $statement = $db->query("SELECT * FROM board");
// $row = $statement->fetchAll(PDO::FETCH_ASSOC);
// foreach ($row as $rw) {
// 	var_dump($rw);
// 	echo "<br>";
// }
?>

</body>
</html>