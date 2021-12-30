<?php
// if error: "attempt to write a readonly database" change file and folder write protections.
class SQLDB extends SQLite3 {
	function __construct() {
		$this->open('image_1.db');
	}
}

$db = new SQLDB();

if(!$db) {
	echo $db->lastErrorMsg();
} else {
	echo "Opened database successfully<br>";
}
$sql =<<<EOF
	CREATE TABLE IF NOT EXISTS COMPANY (
		ID INT PRIMARY KEY NOT NULL,
		NAME TEXT NOT NULL,
		AGE INT NOT NULL,
		ADDRESS CHAR(50), 
		SALARY REAL
	);
EOF;

$ret = $db->exec($sql);
if(!$ret) {
	echo $db->lastErrorMsg();
} else {
	echo "Table created successfully<br>";
}
$db->close();
?>