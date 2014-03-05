var modulo = angular.module('foodApp', ['ngRoute']);
 
modulo.config(function($routeProvider) {
  $routeProvider.when('/companies', 
                      {templateUrl: '/taxyfood/company-list.php', controller: CompanyCtrl});
  $routeProvider.when('/company/:id', 
                      {templateUrl: '/taxyfood/company-list.php', controller: CompanyCtrl});
  $routeProvider.otherwise({redirectTo: '/companies'});
});
