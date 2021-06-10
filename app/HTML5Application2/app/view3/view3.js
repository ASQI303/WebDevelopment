'use strict';

angular.module('myApp.view3', ['ngRoute'])
.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/view3', {
    templateUrl: 'view3/view3.html',
    controller: 'View3Department'
  });
}])



//.controller('View1Task',[function($scope) {
 .controller('View3Department',function ($scope){
    
$scope.departments=[
        {code: "Proj",name:"Projects",function:"Responsible for monitoring all projects"},
        {code: "HR",name:"Human Resource",function:"Responsible for Staff welfare and recruitments"},
        {code:"Ops",name:"Operations",function:"Responsible for running the office"}
];
});