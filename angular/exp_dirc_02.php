<!DOCTYPE html>
<html ng-app="fCheck">
<head>
	<title>Angular Filter test</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
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
	<br><br>
	<second-dirc>Hello world<br><div>Part</div></second-dirc>
	<div>End of second</div>
	<br><br>
	<third-dirc>Hello world<br><div>Part<br></div></third-dirc>
	<div>End of third</div><br><br>
	<br><br>
	<forth-dirc>Hello world<br><div>Part</div></forth-dirc>
	<div>End of forth</div><br><br>
	<br><br>
	<my-tag src='./php/dataload.php'>Its interesting</my-tag>
	<br><br>
	<div>End of HTTP</div><br>
	<scope-data src='./php/dataload.php' title="Its Links">Will it work for</scope-data><div>And status is: {{status}}</div>
	<div>End of scope data</div>
	<br><br>
	<div>
		<span>This is the textbox on the directive</span>
		<book-comment text="commentText"></book-comment>
	</div>
</div>
</body>
</html>
