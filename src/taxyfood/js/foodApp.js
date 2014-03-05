var modulo = angular.module('foodApp', ['ngRoute']);
 
modulo.config(function($routeProvider) {
  $routeProvider.when('/companies', 
                      {templateUrl: 'company-list.php', controller: CompanyCtrl});
  $routeProvider.when('/company/:id', 
                      {templateUrl: 'company-list.php', controller: CompanyCtrl});
  $routeProvider.otherwise({redirectTo: '/companies'});
});
