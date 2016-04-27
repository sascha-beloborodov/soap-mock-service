var app =  angular.module('main-App',[
    'ngRoute',
    'angularUtils.directives.dirPagination',
    'localytics.directives']);
var _ROUTES = ['edit', 'delete'];

app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl: 'templates/home.html',
                controller: 'AdminController'
            }).
            when('/items', {
                templateUrl: 'templates/items.html',
                controller: 'ItemController'
            }).
            when('/items/:type/:id', {
                templateUrl: 'templates/items.html',
                controller: 'ItemController'
            }).
            when('/requests', {
                templateUrl: 'templates/requests.html',
                controller: 'RequestsController'
            }).
            when('/response/:id/:type', {
                templateUrl: 'templates/response.html',
                controller: 'ResponseController'
            });
}]);