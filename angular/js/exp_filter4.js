var app = angular.module('fCheck', []);

app.controller('fController', ['$scope', '$window', function($scope, $window){
	$scope.wSize = angular.element($window);
}]);

// To declare a filter we pass in two parameters to app.filter

// The first parameter is the name of the filter 
// second is a function that will return another function that does the actual work of the filter

app.filter('cakPrime', function() {

  // In the return function, we must pass in a single parameter which will be the data we will work on.
  // We have the ability to support multiple other parameters that can be passed into the filter optionally
  return function(number, num2) {
  		var output = number+5;
  		function isPrime(num) {
  			if(num==2) return true;
  			if(num%2==0) return false;
  			else {
  				for (var i = 3; i <= Math.sqrt(num); i+=2) {
  					if (num%i==0) {
	  					// console.log(num+": "+i+" = "+num%i);
  						return false;
  					}
  				}
  			}
  			return true;
  		}
  		var prime = [];
  		if(isPrime(number)) prime.push(number);
  		if(num2)
	  		for (var i = number+2; i <= num2; i++) {
	  			if(isPrime(i)) prime.push(i);
	  		}
  		return prime;
  }

});
