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
	
$db = new PDO('sqlite::tests.db', null, null, array(PDO::ATTR_PERSISTENT => true));
// $db->query('CREATE TABLE people (person_id INTEGER PRIMARY KEY AUTOINCREMENT, first_name text NOT NULL, last_name text NOT NULL)');
// $db->query("insert into people (first_name, last_name) values ('Bipul', 'Nath')");
$statement = $db->query("SELECT * FROM people");
$row = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($row);

?>

</body>
</html>