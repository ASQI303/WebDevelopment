'use strict';

angular.module('myApp.view2', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/view2', {
    templateUrl: 'view2/view2.html',
    controller: 'View2Employee'
  });
}])


 .controller('View2Employee',function ($scope){
     $scope.employees=[
        {number: "0430",name:"David Jone",department: "Operations"},
        {number: "0431",name:"Charles Barkley",department: "Finance"},
        {number:"0432", name:"Kobe Bryant",department:"Research"}
];
});
