var app = angular.module('fCheck', []);

app.controller('fController', ['$scope', function ($scope) {
    var counter = 0;
    $scope.customer = {
        name: 'David',
        street: '1234 Anywhere St.'
    };
    
    $scope.customers = [
        {
            name: 'David',
            street: '1234 Anywhere St.'
        },
        {
            name: 'Tina',
            street: '1800 Crest St.'
        },
        {
            name: 'Michelle',
            street: '890 Main St.'
        }
    ];

    $scope.addCustomer = function () {
        counter++;
        $scope.customers.push({
            name: 'New Customer' + counter,
            street: counter + ' Cedar Point St.'
        });
    };

    $scope.changeData = function () {
        counter++;
        $scope.customer = {
            name: 'James',
            street: counter + ' Cedar Point St.'
        };
    };

    $scope.todo = [
        {name: 'Create a custom directive', completed: true},
        {name: 'Learn about restrict', completed: true},
        {name: 'Master scopes', completed: false}
      ];
}]);
app.directive('mySharedScopeAnd', function () {
    return {
        template: 'Name: {{customers[1].name}}<br /> Street: {{customers[1].street}}'
    };
});

app.directive("w3TestDirective", function() {
    return {
        template : "<h1>Made by a directive!</h1>"
    };
});

app.directive("w3TestMoreDirective", function() {
    return {
        restrict : "EA",
        template : "<h1>{{title}}</h1>",
        scope: {title:'@'}
    };
});

app.directive('helloWorld', function() {
  return {
      restrict: 'AEC',  // this enables how you can user in the page as tab, attribute, html element and class
      replace: 'true',
      template: '<h3>Hello World!!</h3>'
  };
});
app.directive("myDirName",function () {
    return {
      restrict: 'EA',
      template: '<h1>{{title}}</h1><div ng-repeat="todo in list"><label><input type="checkbox" ng-model="todo.completed">{{todo.name}}</label></div>',
      scope: {
        list: '=',
        title: '@'
      }
    };
  });

app.directive("mySample", function() {
  return {
    scope:true,
    restrict: 'AE',
    replace: 'true',
    link:function(scope,element,attr){
        var markup = '<h3>Hello world </h3>';
        angular.element(element).html(markup);
    }
  };
});