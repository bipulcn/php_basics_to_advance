var app = angular.module('fCheck', []);

app.controller('fController', ['$scope', '$window', function($scope, $window){
	$scope.wSize = angular.element($window);
}]);

// To declare a filter we pass in two parameters to app.filter

// The first parameter is the name of the filter 
// second is a function that will return another function that does the actual work of the filter

app.filter('myFilter', function() {

  // In the return function, we must pass in a single parameter which will be the data we will work on.
  // We have the ability to support multiple other parameters that can be passed into the filter optionally
  return function(number, optional1, optional2) {

    if(isNaN(number) || number < 1) {

      // If the data is not a number or is less than one (thus not having a cardinal value) return it unmodified.
      return number;

    } else {

      // If the data we are applying the filter to is a number, perform the actions to check it's ordinal suffix and apply it.

      var lastDigit = number % 10;

      if(lastDigit === 1) {
        return number + 'st'
      } else if(lastDigit === 2) {
        return number + 'nd'
      } else if (lastDigit === 3) {
        return number + 'rd'
      } else if (lastDigit > 3) {
        return number + 'th'
      }

    }

  }

});
