var app = angular.module('fCheck', []);

app.controller('fController', ['$scope', function ($scope) {
    var counter = 0;
    $scope.testVar = "This is a test var";
    $scope.customer = { name: 'David', street: '1234 Anywhere St.' };
    
    $scope.customers = [
        { name: 'David',    street: '1234 Anywhere St.' },
        { name: 'Tina',     street: '1800 Crest St.' },
        { name: 'Michelle', street: '890 Main St.' }
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
        {name: 'Learn about restrict',      completed: true},
        {name: 'Master scopes',             completed: false}
      ];
}]);
app.directive('mySharedScopeAnd', function () {
    return {
        template: "<div ng-repeat='v in customers'>Name: <b>{{v.name}}</b><br /> Street: {{v.street}}<hr></div>"
    };
});

app.directive("w3TestDirective", function() {
    return {
        link:function(scope, elem, attrs){
            scope.testVar = "This was changed from directive";
            elem.bind('mouseover', function() {
                elem.css('color', 'orange');
            });
            elem.bind('mouseout', function() {
                elem.css('color', 'gray');
            });
        },
        template : "<h1>Made by a directive! Test directive</h1>"
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
      template: '<h3>Hello World!! for tag, attribute and class.</h3>'
  };
});
app.directive("myDirName",function () {
    return {
      restrict: 'EA',
      template: '<h1>{{title}}</h1><div ng-repeat="todo in list"><label>'+
      '<input type="checkbox" ng-model="todo.completed">{{todo.name}}</label></div>',
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


app.directive("user", function() {
    return {
        restrict: 'E',
        link: function(scope, element, attrs) {
            scope.username = attrs.username;
            scope.avatar = attrs.avatar;
            scope.reputation = attrs.reputation;
        },
        template: "<img src='{{avatar}}'><div>Username: {{username}}, <br>Reputation: {{reputation}}</div>"
    }
})

// We can use direcive as bellow 
app.directive("restricted", function() {
    return {
        restrict: 'A',
        link: function(scope, element, attrs) {
            // Some auth check function
            var isAuthorized = checkAuthorization();
            if (!isAuthorized) {
                element.css('display', 'none');
            }
        }
    }
})
