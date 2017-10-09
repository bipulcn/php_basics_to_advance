var app = angular.module('fCheck', []);

app.controller('fController', ['$scope', '$window', function($scope, $window){
	$scope.wSize = angular.element($window);
}]);
app.directive('myDomDirective', ['$window', function ($window) {
    return {
        link: function ($scope, element, attrs) {
        	$scope.hellow = "hello world";
            element.bind('click', function () {
                element.html('You clicked me!');
            });
            element.bind('mouseenter', function () {
                element.css('background-color', 'orange');
            });
            element.bind('mouseleave', function () {
                element.css('background-color', 'white');
            });
            angular.element($window).bind('resize', function(){
            	console.log("hewl "+$window.innerWidth);
	            element.html('Click Me! '+$window.innerWidth);
	        });
        }
    };
}]);