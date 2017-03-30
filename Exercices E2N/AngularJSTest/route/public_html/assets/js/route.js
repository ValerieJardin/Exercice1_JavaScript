'use strict';
//Objet qui permet de controler les routes
var appRoute = angular.module('appRoute', ['ngRoute']);
//Configuration de la route
appRoute.config(['$routeProvider', function ($routeProvider) {
    $routeProvider
            .when('/home', {
                templateUrl: 'view/home.html',
                controller: 'homeCtrl'
            })
            .when('/contact', {
                templateUrl: 'view/contact.html',
                controller: 'contactCtrl'
            })
            .otherwise({
                redirectTo: '/home'
            });
}]);
//Objet qui va controler les controleurs : déclaration du controleur
var appRouteCtrl = angular.module('appRouteCtrl', []);
//Controleur de la page home
appRoute.controller('homeCtrl', ['$scope', function($scope){
    
}]);
//Controleur de la page contact
appRoute.controller('contactCtrl', ['$scope', function($scope){
    
}]);
