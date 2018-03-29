<!DOCTYPE html>
<html>
<head>
  <title>Angularjs Image Uploading</title>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>
</head>
<body ng-app="main-App" ng-controller="AdminController">


<!-- Form Start -->
<form ng-submit="submit()" name="form" role="form">


  <input ng-model="form.image" type="file" class="form-control input-lg" accept="image/*" onchange="angular.element(this).scope().uploadedFile(this)" style="width:400px" >
  <input type="submit" id="submit" value="Submit" />
  <br/>
  <img ng-src="{{image_source}}" style="width:300px;">
  <img ng-src="./img/lod.gif" style="width: 50px;" ng-show="showloader">

</form>
<!-- Form End -->


<script type="text/javascript">

var app =  angular.module('main-App',[]);

app.controller('AdminController', function($scope, $http) {
	$scope.form = [];
	$scope.files = [];
	$scope.showloader = false;
	$scope.submit = function() {
		$scope.form.image = $scope.files[0];
		$scope.showloader = true;
		$http({
			method : 'POST', url : './php/upload.php',
			processData: false,
			transformRequest: function (data) {
				var formData = new FormData();
				formData.append("image", $scope.form.image);  
				formData.append("name", "img_1");
				formData.append("width", "600");
				return formData;  
			}, 
			data : $scope.form,
			headers: { 'Content-Type': undefined }
		}).success(function(data){
			console.log(data);
			$scope.showloader = false;
		});
	};


	$scope.uploadedFile = function(element) {
		$scope.currentFile = element.files[0];
		var reader = new FileReader();
		reader.onload = function(event) {
			$scope.image_source = event.target.result
			$scope.$apply(function($scope) {
				$scope.files = element.files;
				console.log($scope.files);
			});
		}
		reader.readAsDataURL(element.files[0]);
	}


});
</script>


</body>
</html>