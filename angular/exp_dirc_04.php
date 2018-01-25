<!DOCTYPE html>
<html ng-app="fCheck">
<head>
	<title>Angular Filter test</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./js/angular.min.js"></script>
	<script type="text/javascript" src="./js/exp_dirc04
	.js"></script>
</head>
<body ng-controller="fController">
	<div>
		<h1>Directives</h1>
		<h2>Movie: {{movie}}</h2>
	  	Change Movie Title : <input type='text' ng-model='movie'/>
	  	<hr>
	    <movie-directive></movie-directive>
	    <hr>
	    <h2>Dovie: {{drama}}</h2>
        <h3>Rating : {{rating}}</h3>
        <div><button ng-click='display(drama)'>View Movie</button></div>
	  	Change drama Title : <input type='text' ng-model='drama'/>
	  	<hr>
	    <drama-directive drama='drama' rating="{{rating}}" display="display()"></drama-directive>
	</div>
</body>
</html>