var app = angular.module('fCheck', []);

app.controller('fController', ['$scope', '$sce', function ($scope, $sce) {
    $scope.todo = [
        {name: 'Create a custom directive', completed: true},
        {name: 'Learn about restrict', completed: true},
        {name: 'Master scopes', completed: false}
      ];
    $scope.commentText = "This is a comment text";
    $scope.trustIt = function(itm){
      return $sce.trustAsHtml(itm);
    }
}]);

app.directive('firstDirc', function() {
    return {
        template: "<h3>First directive Structure</h3>"
    };
});

app.directive('secondDirc', function() {
    return function(scope, element, attrs) {
        element.bind('click', function(){  //  mouseenter
            var html ='<div>I should not be red</div>';
            element.append(html);
        })
    };
});

app.directive('thirdDirc', function() {
    return  {
        restrict: 'AEC',
        link: function(scope, element, attrs) {
            element.on('click', function(event){
                let old = element.html();
                element.html("Thank you for buying. <br>"+old);
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
          element.bind('mouseover', function() {
              element.css({'color': 'orange', 'cursor':'pointer'});
          });
          element.bind('mouseout', function() {
              element.css('color', 'gray');
          });
          element.on('click', function(){
            $http({
                method:'POST', url: './php/dataload.php', data: {part: 3}
            }).then(function(data){
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

// #########################
app.directive("bookComment", function() {
    return {
        restrict: 'E',
        scope: {
            text: '='
        },
        template: '<div ng-bind="text"></div>'
    }
})
