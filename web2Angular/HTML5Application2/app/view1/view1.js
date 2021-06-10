'use strict';

angular.module('myApp.view1', ['ngRoute'])
.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/view1', {
    templateUrl: 'view1/view1.html',
    controller: 'View1Task'
  });
}])



//.controller('View1Task',[function($scope) {
 .controller('View1Task',function ($scope){
    
$scope.tasks=[
        {"name": "Ahmed","description":"Web 2 Assignment1","priority": 1,"duedate":"21-11-2017"},
        {"name": "Umo","description":"Web 2 Assignment2","priority": 2,"duedate":"22-11-2017"},
        {"name":"Ahmed","description":"Web 2 Assignment3","priority":1,"duedate":"22-11-2017"}
];
$scope.inputText="initial value";
});