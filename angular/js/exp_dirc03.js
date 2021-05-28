var app = angular.module('fCheck', []);

app.controller('fController', ['$scope', function ($scope) {
    $scope.myattrs = "none";
    $scope.todo = [
        {name: 'Create a custom directive', completed: true},
        {name: 'Learn about restrict', completed: true},
        {name: 'Master scopes', completed: false}
      ];
}]);

app.directive('firstDirc', function() {
    return {
        template: "<h3>First directive STructure</h3>"
    };
});

app.directive('secondDirc', function() {
    return {
        scope: true,
        transclude: true,
        template: "<div>Test Directives</div><ul><li ng-repeat='td in todo' ng-class='{done:td.completed}'>{{td.name}}</li></ul><div>{{testData}}</div>",
        link: function(scope, element, attrs) {
          scope.testData = "Thank you";
        }
    };
});

app.directive('thirdDirc', function() {
    return  {
        restrict: 'AEC',
        scope: { myattrs: '@'},
        link: function(scope, element, attrs) {
            element.on('click', function(event){
                // angular.forEach(element[0].style, function(value, key){
                //     console.log(key);
                //     console.log(value);
                // });
                element.html("<h4>Thank you for buying. "+scope.myattrs+"</h4>");
                element.css({color: 'green'});
            });
        }
    };
});

app.directive('forthDirc', ['$http', function($http) {
    return {
        restrict: 'E',
        scope: { title: '@' },
        link: function(scope, element) {
            element.on('click', function(){
                console.log("Hello world");
                element.html("This is changing.");
            });
        }
    }
}]);
