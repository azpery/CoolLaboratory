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
    .when("/", {templateUrl: "./bundles/app/partials/index.html", controller: "projetsController"})
    // Pages
    .when("/index", {templateUrl: "./bundles/app/partials/index.html", controller: "projetsController"})
    .when("/#", {templateUrl: "./bundles/app/partials/index.html", controller: "MyCtrl1"})
    .when("/travail", {templateUrl: "./bundles/app/partials/travail.html", controller: "MyCtrl2"})
    .when("/activite", {templateUrl: "./bundles/app/partials/act.html", controller: "MyCtrl1"})
    .when("/ressources", {templateUrl: "./bundles/app/partials/ressouces.html", controller: "MyCtrl1"})
    .when("/projets/ajouter", {templateUrl: "./bundles/app/partials/ajouterProjet.html", controller: "ajouterProjetsController"})
    .when("/projects/:id", {templateUrl: "./bundles/app/partials/projets.html", controller: "projetControlleur"})
    .when("/projects/:id/discussion", {templateUrl: "./bundles/app/partials/Discussion.html", controller: "DiscussionsController"})
    .when("/projects/:id/fichier", {templateUrl: "./bundles/app/partials/Fichier.html", controller: "MyCtrl1"})
    .when("/projects/:id/activite", {templateUrl: "./bundles/app/partials/Activite.html", controller: "MyCtrl1"})
    .when("/project/:id/discussion/:iddisc", {templateUrl: "./bundles/app/partials/discussionModal.html", controller: "MessagesDiscussionController"})
    .when("/project/:id/team", {templateUrl: "./bundles/app/partials/team.html", controller: "teamController"})
    .when("/projects/:id/discussions/add", {templateUrl: "./bundles/app/partials/ouvrirDiscussion.html", controller: "ajouterDiscussionController"})
    .when("/calendrier", {templateUrl: "./bundles/app/partials/calendrier.html", controller: "MyCtrl1"})
    .when('/login', {templateUrl: './bundles/app/partials/login.html', controller: 'Login'})
    .when('/signup', {templateUrl: './bundles/app/partials/signup.html', controller: 'signupController'})
    .otherwise({redirectTo: './index'})
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
