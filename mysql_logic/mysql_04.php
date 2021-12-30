<!DOCTYPE html>
<html>
<head>
	<title>Mysql and PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
		<h1>JSON</h1>
		<?php
		if (file_exists('xml/mod.xml')) {
		    $xml = simplexml_load_file('xml/mod.xml');		 
		    $json = json_encode($xml, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
		    echo "<pre>".$json."</pre>";
		} else {
		    exit('Failed to open test.xml.');
		}
		?>
	</div>
</body>
</html>