/**
 * AngularJS Tutorial 1
 * @author Nick Kaye <nick.c.kaye@gmail.com>
 */

/**
 * Main AngularJS Web Application
 */
var app = angular.module('CoolLab', [
  'ngRoute',
  'ngAnimations',
  'CoolLab.filters', 'CoolLab.services', 'CoolLab.directives', 'CoolLab.controllers'
]);

/**
 * Configure the Routes
 */
app.config(['$routeProvider', function ($routeProvider) {
  $routeProvider
    // Home
    .when("/", {templateUrl: "partials/index.html", controller: "PageCtrl"})
    // Pages
    .when("/index", {templateUrl: "partials/index.html", controller: "MyCtrl1"})
    .when("/#", {templateUrl: "partials/index.html", controller: "MyCtrl1"})
    .when("/travail", {templateUrl: "partials/travail.html", controller: "PageCtrl"})
    .when("/activite", {templateUrl: "partials/act.html", controller: "PageCtrl"})
    .when("/ressources", {templateUrl: "partials/ressouces.html", controller: "PageCtrl"})
    .when("/projets/ajouter", {templateUrl: "partials/ajouterProjet.html", controller: "PageCtrl"})
    .when("/projects/:id", {templateUrl: "partials/projets.html", controller: "PageCtrl"})
    .when("/projects/:id/discussion", {templateUrl: "partials/Discussion.html", controller: "PageCtrl"})
    .when("/projects/:id/fichier", {templateUrl: "partials/Fichier.html", controller: "PageCtrl"})
    .when("/projects/:id/activite", {templateUrl: "partials/Activite.html", controller: "PageCtrl"})
    .when("/project/:id/discussion/1", {templateUrl: "partials/discussionModal.html", controller: "PageCtrl"})
    .when("/project/:id/team", {templateUrl: "partials/team.html", controller: "PageCtrl"})
    .when("/projects/:id/discussions/add", {templateUrl: "partials/ouvrirDiscussion.html", controller: "PageCtrl"})
    .when("/calendrier", {templateUrl: "partials/calendrier.html", controller: "PageCtrl"})

}]);

/**
 * Controls the Blog
 */
app.controller('BlogCtrl', function (/* $scope, $location, $http */) {
  console.log("Blog Controller reporting for duty.");
});

/**
 * Controls all other Pages
 */
app.controller('PageCtrl', function (/* $scope, $location, $http */) {
  console.log("Page Controller reporting for duty.");

  // Activates the Carousel
  $('.carousel').carousel({
    interval: 5000
  });

  // Activates Tooltips for Social Links
  $('.tooltip-social').tooltip({
    selector: "a[data-toggle=tooltip]"
  })
});
app.controller('CabinetListCtrl', function ($scope, $http) {
  $http.get('./model/php/cabinet.php').success(function(data) {
    $scope.cabinet = data;
    console.log(data);
  });

  $scope.orderProp = 'id';
});
