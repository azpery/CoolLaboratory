'use strict';

/* Controllers */

angular.module('CoolLab.controllers', ['ngCookies']).
  controller('Login', ['$rootScope', '$scope', '$window', '$cookies','Hello', 'Salt', 'Digest', function($rootScope, $scope, $window, $cookies, Hello, Salt, Digest) {
    // On Submit function

    $scope.getSalt = function() {
        var username = $scope.username;
        var password = $scope.password;
        // Get Salt
        Salt.get({username:username}, function(data){
            var salt = data.salt;
            // Encrypt password accordingly to generate secret
            Digest.cipher(password, salt).then(function(secret){

              // Store auth informations in cookies for page refresh
              $cookies.username = $scope.username;
              $cookies.put('username', $scope.username);
              $cookies.secret = secret;
              $cookies.put('secret', secret);
              $rootScope.userAuth = {username: $scope.username, secret : $scope.secret};
              $scope.hello = Hello.get({username:$rootScope.userAuth.username,secret:secret}, function(data){
                        console.log(data);
                        $scope.secret = "Vous êtes connecté";
                        $scope.error = "";
                    }, function(err){
                        console.log(err);
                        $scope.salt = "";
                        $scope.secret = "";
                        $scope.error = err.data;
                });

            }, function(err){
                console.log(err);
                $scope.error = err.status;
            });
        }, function(err){
            console.log(err);
            $scope.error = err.status;
        });
    };
  }])
  .controller('MyCtrl1', ['$rootScope','$scope', '$window', '$cookies', 'Hello', 'Salt', function($rootScope, $scope, $window, $cookies, Hello, Salt) {
    // If auth information in cookie
    if ( typeof $cookies.get('username') != "undefined" && typeof $cookies.get('secret') != "undefined" ) {
        $rootScope.userAuth = {username: $cookies.get('username'), secret : $cookies.get('secret')};
    }
    // If not authenticated, go to login
    if ( typeof $rootScope.userAuth == "undefined" ) {
        $window.location = '#/login';
        return;
    }
    // Simple communication sample, return world
    $scope.hello = Hello.get({username:$rootScope.userAuth.username,secret:$rootScope.userAuth.secret}, function(data){
      console.log(data);
}, function(err){
  console.log(err);
  $window.location = '#/login';
  return;
});
  }])
  .controller('MyCtrl2', ['$rootScope','$scope', '$window','$cookies', 'Todos', function($rootScope, $scope, $window, $cookies, Todos) {
        // If auth information in cookie
    if ( typeof $cookies.username != "undefined" && typeof $cookies.secret != "undefined" ) {
        $rootScope.userAuth = {username: $cookies.username, secret : $cookies.secret};
    }
    // If not authenticated, go to login
    if ( typeof $rootScope.userAuth == "undefined" ) {
        $window.location = '#/login';
        return;
    }

    // Load Todos with secured connection
    $scope.todos = Todos.query({username:$rootScope.userAuth.username,secret:$rootScope.userAuth.secret});

    $scope.addTodo = function() {
        var todo = {text:$scope.todoText, done:false};
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
  }]);
