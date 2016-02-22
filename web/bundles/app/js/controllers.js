'use strict';

/* Controllers */

angular.module('CoolLab.controllers', ['ngCookies']).
controller('Login', ['$rootScope', '$scope', '$window', '$cookies', 'User', 'Salt', 'Digest', function($rootScope, $scope, $window, $cookies, User, Salt, Digest) {
    // On Submit function

    $scope.getSalt = function() {
      var username = $scope.username;
      var password = $scope.password;
      // Get Salt
      Salt.get({
        username: username
      }, function(data) {
        var salt = data.salt;
        // Encrypt password accordingly to generate secret
        Digest.cipher(password, salt).then(function(secret) {

          // Store auth informations in cookies for page refresh
          $cookies.username = $scope.username;
          $cookies.put('username', $scope.username);
          $cookies.secret = secret;
          $cookies.put('secret', secret);
          $rootScope.userAuth = {
            username: $scope.username,
            secret: $scope.secret
          };
          $scope.hello = User.get({
            username: $rootScope.userAuth.username,
            secret: secret
          }, function(data) {
            console.log(data);
            $scope.secret = "Vous êtes connecté";
            $scope.error = "";
            $cookies.put('id', data.id);
            $rootScope.logged = true;
          }, function(err) {
            $scope.salt = "";
            $scope.secret = "";
            $scope.error = err.status;
            $cookies.remove('secret');
            $cookies.remove('username');
            $cookies.remove('id');
          });

        }, function(err) {
          console.log(err);
          $scope.error = err.status;
        });
      }, function(err) {
        console.log(err);
        $scope.error = err.status;
      });
    };
  }])
  .controller('MyCtrl1', ['$rootScope', '$scope', '$window', '$cookies', 'Hello', 'Salt', function($rootScope, $scope, $window, $cookies, Hello, Salt) {
    // If auth information in cookie
    if (typeof $cookies.get('username') != "undefined" && typeof $cookies.get('secret') != "undefined") {
      $rootScope.userAuth = {
        username: $cookies.get('username'),
        secret: $cookies.get('secret')
      };
    }
    // If not authenticated, go to login
    if (typeof $rootScope.userAuth == "undefined") {
      $window.location = '#/login';
      return;
    }
    // Simple communication sample, return world
    $scope.hello = Hello.get({
      username: $rootScope.userAuth.username,
      secret: $rootScope.userAuth.secret
    }, function(data) {
      console.log(data);
    }, function(err) {
      console.log(err);
      $window.location = '#/login';
      return;
    });
  }])
  .controller('MyCtrl2', ['$rootScope', '$scope', '$window', '$cookies', 'Todos', function($rootScope, $scope, $window, $cookies, Todos) {
    // If auth information in cookie
    if (typeof $cookies.get('username') != "undefined" && typeof $cookies.get('secret') != "undefined") {
      $rootScope.userAuth = {
        username: $cookies.get('username'),
        secret: $cookies.get('secret')
      };
    }
    // If not authenticated, go to login
    if (typeof $rootScope.userAuth == "undefined") {
      $window.location = '#/login';
      return;
    }

    // Load Todos with secured connection
    $scope.todos = Todos.query({
      username: $rootScope.userAuth.username,
      secret: $rootScope.userAuth.secret
    });

    $scope.addTodo = function() {
      var todo = {
        text: $scope.todoText,
        done: false
      };
      $scope.todos.push(todo);
      $scope.todoText = '';
    };

    $scope.remaining = function() {
      var count = 0;
      angular.forEach($scope.todos, function(todo) {
        count += todo.done ? 0 : 1;
      });
      return count;
    };

    $scope.archive = function() {
      var oldTodos = $scope.todos;
      $scope.todos = [];
      angular.forEach(oldTodos, function(todo) {
        if (!todo.done) $scope.todos.push(todo);
      });
    };
  }])
  .controller('projetsController', ['$rootScope', '$scope', '$window', '$cookies', 'AjouterProjet', 'Projets', function($rootScope, $scope, $window, $cookies, AjouterProjet, Projets) {
    // If auth information in cookie
    if (typeof $cookies.get('username') != "undefined" && typeof $cookies.get('secret') != "undefined") {
      $rootScope.userAuth = {
        username: $cookies.get('username'),
        secret: $cookies.get('secret')
      };
    }
    // If not authenticated, go to login
    if (typeof $rootScope.userAuth == "undefined") {
      $window.location = '#/login';
      return;
    }

    // Load Todos with secured connection
    $scope.projets = Projets.query({
      username: $rootScope.userAuth.username,
      secret: $rootScope.userAuth.secret
    });
    $scope.projet = {
      username: $rootScope.userAuth.username,
      secret: $rootScope.userAuth.secret
    };
    $scope.createProjet = function() {

      AjouterProjet.post($scope.projet);
    }
  }])
  .controller('ajouterProjetsController', ['$rootScope', '$scope', '$window', '$cookies', 'AjouterProjet', 'Projets', function($rootScope, $scope, $window, $cookies, AjouterProjet, Projets) {
    // If auth information in cookie
    if (typeof $cookies.get('username') != "undefined" && typeof $cookies.get('secret') != "undefined") {
      $rootScope.userAuth = {
        username: $cookies.get('username'),
        secret: $cookies.get('secret')
      };
    }
    // If not authenticated, go to login
    if (typeof $rootScope.userAuth == "undefined") {
      $window.location = '#/login';
      return;
    }
    var date = new Date();
    $scope.projet = {
      username: $rootScope.userAuth.username,
      secret: $rootScope.userAuth.secret,
      idchef: $cookies.get('id'),
      datecrea: date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate()
    };
    $scope.createProjet = function() {

      AjouterProjet.post($scope.projet);
    }
  }])
  .controller('headerController', ['$rootScope', '$scope', '$window', '$cookies', function($rootScope, $scope, $window, $cookies) {
    // If auth information in cookie
    $rootScope.logged = false;
    if (typeof $cookies.get('username') != "undefined" && typeof $cookies.get('secret') != "undefined") {
      $rootScope.userAuth = {
        username: $cookies.get('username'),
        secret: $cookies.get('secret')
      };
      $rootScope.logged = true;
    }
    // button logout clicked, remove the stored cookies
    $scope.logout = function() {
      $cookies.remove("username");
      $cookies.remove("id");
      $cookies.remove("secret");
      $rootScope.userAuth = undefined
      $window.location = '#/login';
      return;
    }
  }])
  .controller('signupController', ['$rootScope', '$scope', '$window', '$cookies', 'Signup', function($rootScope, $scope, $window, $cookies, Signup) {
    //
    $scope.user = {};
    $scope.validForm = function() {
      Signup.post(
        $scope.user
      , function(data) {
        var id = data.id;
        $scope.error = "";
        $scope.success = data.username
      }, function(err) {
        console.log(err);
        $scope.error = err.status;
      });
    }
  }])
.controller('projetControlleur', ['$rootScope', '$scope', '$window', '$cookies','$routeParams','AddTicket','GetTicket','ChangeTicket','DeleteTicket',  function($rootScope, $scope, $window, $cookies,$routeParams, AddTicket, GetTicket,ChangeTicket,DeleteTicket) {
    //
    if (typeof $cookies.get('username') != "undefined" && typeof $cookies.get('secret') != "undefined") {
      $rootScope.userAuth = {
        username: $cookies.get('username'),
        secret: $cookies.get('secret')
      };
    }
    // If not authenticated, go to login
    if (typeof $rootScope.userAuth == "undefined") {
      $window.location = '#/login';
      return;
    }
    var date = new Date();

    $scope.ticket = {username: $rootScope.userAuth.username,
    secret: $rootScope.userAuth.secret,
    idproj: $routeParams.id,
    datecrea: date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate(),
    iddev:$cookies.get('id')}
    $scope.addTicket = function () {
      AddTicket.post($scope.ticket, function(data) {
        var id = data.id;
        $scope.tickets.push(data)
        $scope.error = "";
        $scope.success = data.username
      }, function(err) {
        console.log(err);
        $scope.error = err.status;
      });

    }

    GetTicket.query($scope.ticket, function(data) {
      console.log(data);
      var id = data.id;
      $scope.error = "";
      $scope.tickets = data
      triggerTodo()
      $scope.success = data.username
    }, function(err) {
      console.log(err);
      $scope.error = err.status;
    });
    $scope.setOk = function(index){
      $scope.tickets[index].etat = 0
      $.extend($scope.tickets[index],{username: $rootScope.userAuth.secret});
      console.log($scope.tickets[index]);
      ChangeTicket.post($scope.tickets[index], function(data) {
        console.log(data);
        $scope.tickets[index] = data

      }, function(err) {
        console.log(err);
        $scope.error = err.status;
      });
    }
    $scope.setNotOk = function(index){
      $scope.tickets[index].etat = 1
      $.extend($scope.tickets[index],{username: $rootScope.userAuth.username,secret: $rootScope.userAuth.secret});
      ChangeTicket.post($scope.tickets[index], function(data) {
        console.log(data);
        $scope.tickets[index] = data
      }, function(err) {
        console.log(err);
        $scope.error = err.status;
      });
    }
    $scope.remove = function(index){
      $.extend($scope.tickets[index],{username: $rootScope.userAuth.username,secret: $rootScope.userAuth.secret});
      DeleteTicket.post($scope.tickets[index], function(data) {
        $scope.tickets.splice(index, 1);

      }, function(err) {
        console.log(err);
        $scope.error = err.status;
      });
    }
  }]);
