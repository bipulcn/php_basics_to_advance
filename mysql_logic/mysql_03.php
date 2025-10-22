<!DOCTYPE html>
<html>
<head>
	<title>Mysql and PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
		<h1>XML</h1>
		<?php
		if (file_exists('xml/mod.xml')) {
		    $xml = simplexml_load_file('xml/mod.xml');		 
		    print_r($xml->header);
		} else {
		    exit('Failed to open test.xml.');
		}
		?>
	</div>
</body>
</html>