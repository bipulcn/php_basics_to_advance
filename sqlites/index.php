<?php
// phpinfo();
$db = new PDO('sqlite::test.db', null, null, array(PDO::ATTR_PERSISTENT => true));
// $db = new PDO("sqlite3:test.db");
// $db->query('CREATE TABLE people (person_id INTEGER PRIMARY KEY AUTOINCREMENT, first_name text NOT NULL, last_name text NOT NULL)');
// $db->query("insert into people (first_name, last_name) values ('Bipul', 'Nath')");
$statement = $db->query("SELECT * FROM people");
$row = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($row);

?>
