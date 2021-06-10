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
        {no:512,code:"Pro",name:"Projects"},
        {no:515,code:"HR",name:"Human Resource"},
        {no:561,code:"Oper",name:"Operations"}
];
$scope.inputText="initial value";
});