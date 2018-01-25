<!DOCTYPE html>
<html ng-app="fCheck">
<head>
	<title>Angular Filter test</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./js/angular.min.js"></script>
	<script type="text/javascript" src="./js/exp_dirc02.js"></script>
</head>
<body ng-controller="fController">
	<?php session_start(); 
	echo session_id(); ?>
<div>
	<h1>Directives</h1>
	<first-dirc></first-dirc>
	<div>End of first</div>
	<second-dirc>Hello world<br><div>Part</div></second-dirc>
	<div>End of second</div>
	<third-dirc>Hello world<br><div>Part</div></third-dirc>
	<div>End of third</div><br><br>
	<forth-dirc>Hello world<br><div>Part</div></forth-dirc>
	<div>End of forth</div><br><br>
	<my-tag src='./php/dataload.php'>Its interesting</my-tag>
	<div>End of HTTP</div><br>
	<scope-data src='./php/dataload.php' title="Its Links">Will it work for</scope-data><div>And status is: {{status}}</div>
	<div>End of scope data</div>
</div>
</body>
</html>