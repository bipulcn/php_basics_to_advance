var app = angular.module('fCheck', []);

app.controller('fController', ['$scope', '$window', function($scope, $window){
	$scope.wSize = angular.element($window);
  $scope.test = "testing the angular";

  $scope.testFunc = function() {
    console.log("this is a test");
  }
}]);

function angularCall() {
  alert("hello world");
  angular.element(document.getElementById('htmls')).scope().testFunc();
}