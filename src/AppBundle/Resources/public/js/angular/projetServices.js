'use strict';

/* Services */

// Demonstrate how to register services
// In this case it is a simple value service.

  angular.module('CoolLab.services.projet', ['ngResource','ngCookies','CoolLab.services']).

  factory('Projet', ['$resource', 'TokenHandler', function($resource, TokenHandler){
      var resource = $resource('./app_dev.php/api/ones/:idproj/projets', {idproj:'@idproj'}, {
          get: {method:'GET'}
      });
      resource = TokenHandler.wrapActions(resource, ['get']);
      return resource;
  }]).
  factory('Rss', ['$resource', 'TokenHandler', function($resource, TokenHandler){
      var resource = $resource('./app_dev.php/api/rsses/:idproj', {idproj:'@idproj'}, {
          get: {method:'GET', params:{}, isArray:true}
      });
      resource = TokenHandler.wrapActions(resource, ['get']);
      return resource;
  }]).

    value('version', '0.1');
