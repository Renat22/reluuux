var mySPA = angular.module('scotchApp', ['ngRoute']);
mySPA.config(['$routeProvider' , '$locationProvider' ,function ($routeProvider , $locationProvider) {

    $routeProvider
        .when('/', {
            templateUrl: '/content/dashboard',
            controller: 'mainController'
        })

        .when('/dashboard/', {
            templateUrl: '/content/dashboard',
            controller: 'mainController',
            activetab: 'dashboard'
        })
        .when('/add_task', {
            templateUrl: '/content/add_task',
            controller: 'aboutController'
        })
        .when('/task_money', {
            templateUrl: '/content/task_money',
            controller: 'aboutController'
        })
        .when('/my_task', {
            templateUrl: '/content/my_task',
            controller: 'contactController'
        });
    $locationProvider.html5Mode(true);
    $locationProvider.hashPrefix('!');
}]);






mySPA.controller('mainController', ['$scope', function ($scope) {
    $scope.message  =   'I am a Message in Home Page';
}])
.controller('aboutController',['$scope', function ($scope) {
    $scope.message  =   'Here is About Us page';
}])
.controller('contactController',['$scope', function ($scope) {
    $scope.message  =   'Here is Contact Us page';
}]);