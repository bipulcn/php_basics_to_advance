var app = angular.module('fCheck', []);

app.controller('fController', ['$scope', '$document', function ($scope, $document) {
    $scope.todo = [
        {name: 'Create a custom directive', completed: true},
        {name: 'Learn about restrict', completed: true},
        {name: 'Master scopes', completed: false}
      ];
    $scope.list = ['JavaScript', 'Java', '.NET', 'HTML'];
    var comn = 'am is are you fine I new was ware and';
    var body = document.getElementsByTagName("BODY")[0].innerHTML;
    var parser = new DOMParser();
    var doc = parser.parseFromString(body, "text/html");
    body = body.replace('Document', '<i>My Document</i>');
    angular.forEach($scope.list, function(v, ky){
        var ree = new RegExp("( "+v+" (.)*?(>|\n|(&gt;)))", "g"); //  ( "+v+" (.)*?(>|\n))
        var src = body.match(ree);    
        angular.forEach(src, function(pv, k){
            src = pv.search(/</g);
            console.log(src);
            if(src>0) {
                var re = new RegExp(" "+v+" ","g");
                var str = " <a href='#'><b>"+v+"</b></a> ";
                var res = pv.replace(re, str);
                body = body.replace(pv, res);
                console.log(res);
            }
        });
        // console.log(src);
        // src = body.search(ree);
        // console.log(src);
        // console.log(body);
    });

    // var str = 'For more information, see Chapter 3.4.5.1';
    // var re = /see (chapter \d+(\.\d)*)/i;
    // var found = str.match(re);
    // console.log(found);

    // function validateString() {

    // }
    document.getElementsByTagName("BODY")[0].innerHTML = body;
    // console.log(body);
    function parsess(element) {
        console.log(element)
        // object["type"] = element.nodeName;
        var nodeList = element.childNodes;
        angular.forEach(nodeList[0].childNodes, function(v, k){
            console.log(v);
            angular.forEach(v[0], function(v1, k1){
                console.log(v1);
            });
        });
        // console.log(nodeList);
    }
    // parsess(doc);
}]);
/*  
select word from dictionary where 
LOCATE(word, 'Note that contrary to how the .NET Replace method works, 
the JavaScript replace method replaces only the first occurrence if you are using a string as first parameter. 
If you want to replace all occurrences you need to use a regular expression so 
that you can specify the global (g) flag:');
*/