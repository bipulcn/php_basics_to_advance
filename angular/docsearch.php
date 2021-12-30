<!DOCTYPE html>
<html ng-app="fCheck">
<head>
	<title>Angular Filter test</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./js/angular.min.js"></script>
	<script type="text/javascript" src="./js/docsearch.js"></script>
</head>
<style type="text/css">
	a:active {color:red;}
	a:visited {color:white;}
</style>
<body ng-controller="fController">
<div>
	<h1>Document</h1>
	<div>Note that contrary to how the Replace method works, <br>the HTML replace method replaces only > the first
		<script type="text/JavaScript">
			document.write(" Hello World!");
		</script>
	replace method replaces only the first occurrence if you are using a string as first parameter.</div> 	
	<div>
		<div>In JavaScript method names are camel case, so it's replace, not Replace:</div><br>
		<code>$scope.newString = oldString.replace("Script","NO");</code><br>
		<div>Note that contrary to how the .NET Replace method works, the JavaScript replace method replaces only the first occurrence if you are using a string as first parameter. </div><br>
		<code>$scope.newString = oldString.replace(/stackover/g,"NO");</code>
		</div>
	</div>
</body>
</html>