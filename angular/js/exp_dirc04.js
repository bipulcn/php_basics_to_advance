var app = angular.module('fCheck', []);

app.controller('fController', ['$scope', function ($scope) {
    $scope.movie = "Ice Age";
    $scope.drama = "Lord of The Ring"; 
    $scope.rating = 5;
    $scope.todo = [
        {name: 'Create a custom directive', completed: true},
        {name: 'Learn about restrict', completed: true},
        {name: 'Master scopes', completed: false}
      ];
    $scope.display = function(drm) {
        // alert("Drama : " );
        console.log("testing event: "+drm);
    }
}]);

app.directive("movieDirective", function(){
    return {
        restrict: "E",
        scope: true, // false will make it same for all change
        template: "<div>Movie title : {{movie}}</div>"+
        "Type a new movie title : <input type='text' ng-model='movie' />"
    };
});
app.directive("dramaDirective", function(){
    return {
        restrict: "E",
        scope: {
            drama: '=',
            rating: '@',
            display: '&'
        },  // {} will free up $scope and scope
        template: "<div>Drama title : {{drama}}</div>"+
        "Type a new drama title : <input type='text' ng-model='drama' />"+
        "<div>Drama rating : {{rating}}</div>"+
        "Rate the drama : <input type='text' ng-model='rating' />"+
        "<div><button ng-click=\"display(drama)\">View Movie</button></div>",
        link: function($scope, element, attrs) {
            $scope.display = function(movie) {
                alert("Movie : " + movie);
            }
        }
    };
    $scope.testScope = "its a test";
});