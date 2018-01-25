<!DOCTYPE html>
<html ng-app="fCheck">
<head>
	<title>Angular Filter test</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./js/angular.min.js"></script>
	<script type="text/javascript" src="./js/exp_dirc03.js"></script>
</head>
<body ng-controller="fController">
<div>
	<h1>Directives</h1>
	<first-dirc></first-dirc>
	<div>End of first</div>
	<second-dirc>Hello world<br><div>Part</div></second-dirc>
	<div>End of second</div>
	<third-dirc myattrs="TEsting attributes">Hello world<br><div>Part</div></third-dirc>
	<div>End of third</div><br><br>
	<forth-dirc>Hello world<br><div>Part</div></forth-dirc>
	<div>End of forth</div><br><br>
</div>
</body>
</html>