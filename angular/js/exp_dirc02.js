var app = angular.module('fCheck', []);

app.controller('fController', ['$scope', function ($scope) {
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
    return function(scope, element, attrs) {
        element.bind('click', function(){  //  mouseenter
            console.log(element.children()[0]);
            var html ='<div ng-repeat="todo in items">I should not be red</div>';
            if(element.children()[0]) element.children()[0].replaceWith(html);
        })
    };
});

app.directive('thirdDirc', function() {
    return  {
        restrict: 'AEC',
        link: function(scope, element, attrs) {
            element.on('click', function(event){

                element.html("Thank you for buying. "+element[0].getValue);
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
                $http({
                    method:'POST', url: './php/dataload.php', data: {part: 3}
                }).then(function(data){
                    console.log(data);
                    element.html(data['data']);
                }, function(error){
                    alert("Error: "+error);
                })
            });
        }
    }
}]);

app.directive('myTag', ['$http', function($http) {
return {
    restrict: 'ACE',
    replace: true,     
    scope:{
        src:"@"       
    },
    link:function(scope){
        console.info("enter directive controller");
        scope.gallery = [];

        console.log(scope.src);

        $http({
            method: 'POST', url:scope.src, data: {part: 2}
        }).then(function (result) {
            console.log(result);
        }, function (result) {
            alert("Error: No data returned");
        });
    }
}
}]);

app.directive('scopeData', ['$http', function($http) {
    return {
        restrict: 'E',
        replace: true,     
        scope:{
            src:"@"       
        },
        link:function(scope, element){
            element.on('click', function(event){
                console.log("will it");
                $http({
                    method: 'POST', url:scope.src, data: {part: 1}
                }).then(function (result) {
                    console.log(result);
                    element.html(result['data']);
                }, function (result) {
                    alert("Error: No data returned");
                });
            });
        }
    }
}]);