'use strict';

/* Controllers */

angular.module('CoolLab.controllers', ['ngCookies']).
controller('Login', ['$rootScope', '$scope', '$window', '$cookies', 'User', 'Salt', 'Digest', function($rootScope, $scope, $window, $cookies, User, Salt, Digest) {
    // On Submit function
    if (typeof $cookies.get('username') != "undefined" && typeof $cookies.get('secret') != "undefined") {
      $rootScope.userAuth = {
        username: $cookies.get('username'),
        secret: $cookies.get('secret')
      };
    }
    // If not authenticated, go to login
    if (typeof $rootScope.userAuth != "undefined") {
      $window.location = '#/index';
      return;
    }
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
            $rootScope.$broadcast('logged', true);
            $rootScope.logged = true;
            $window.location = '#/index';
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
    $scope.projets = Projets.query({
      username: $rootScope.userAuth.username,
      secret: $rootScope.userAuth.secret,
      id: $cookies.get('id')
    });
    $scope.projet = {
      username: $rootScope.userAuth.username,
      secret: $rootScope.userAuth.secret,
      id: $cookies.get('id')
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
  .controller('headerController', ['$rootScope', '$scope', '$window', '$cookies','Projets', function($rootScope, $scope, $window, $cookies, Projets) {
    // If auth information in cookie
    reload();
    function reload(){
      $rootScope.logged = false;
      if (typeof $cookies.get('username') != "undefined" && typeof $cookies.get('secret') != "undefined") {
        $rootScope.userAuth = {
          username: $cookies.get('username'),
          secret: $cookies.get('secret')
        };
        $rootScope.logged = true;
        $scope.username = $rootScope.userAuth.username
        $rootScope.theme = $scope.deleted
        setInterval(function () {
          Projets.query({
            username: $rootScope.userAuth.username,
            secret: $rootScope.userAuth.secret,
            id: $cookies.get('id')
          },
          function(data) {
            $scope.user = data;
            $scope.doneTickets=0;
            for(var i = 0; i<data[0].idtick.length;i++){
              if(data[0].idtick[i].etat == 1){
                $scope.doneTickets++;
              }
            }
          },
          function(err) {
            console.log(err);
            $scope.error = err.status;
          });
        }, 10000);
        $scope.changeTheme = function (key) {
          $rootScope.theme = "content view-frame";
          if(key == "fall"){
            $('.skin').removeClass('fadeA');
            $('.skin').removeClass('fall');
            $('.skin').removeClass('scale');
            $('.skin').removeClass('cube');
            $('.skin').removeClass('room');
            $('.skin').removeClass('push');
            $(".skin").addClass("fall");
          }else if(key == "fade"){
            $('.skin').removeClass('fadeA');
            $('.skin').removeClass('fall');
            $('.skin').removeClass('scale');
            $('.skin').removeClass('cube');
            $('.skin').removeClass('room');
            $('.skin').removeClass('push');
            $(".skin").addClass("fadeA");
          }else if(key == "scale"){
            $('.skin').removeClass('fadeA');
            $('.skin').removeClass('fall');
            $('.skin').removeClass('scale');
            $('.skin').removeClass('cube');
            $('.skin').removeClass('room');
            $('.skin').removeClass('push');
            $(".skin").addClass("scale");
          }else if(key == "cube"){
            $('.skin').removeClass('fadeA');
            $('.skin').removeClass('fall');
            $('.skin').removeClass('scale');
            $('.skin').removeClass('cube');
            $('.skin').removeClass('room');
            $('.skin').removeClass('push');
            $(".skin").addClass("cube");
          }else if(key == "room"){
            $('.skin').removeClass('fadeA');
            $('.skin').removeClass('fall');
            $('.skin').removeClass('scale');
            $('.skin').removeClass('cube');
            $('.skin').removeClass('room');
            $('.skin').removeClass('push');
            $(".skin").addClass("room");
          }else if(key == "push"){
            $('.skin').removeClass('fadeA');
            $('.skin').removeClass('fall');
            $('.skin').removeClass('scale');
            $('.skin').removeClass('cube');
            $('.skin').removeClass('room');
            $('.skin').removeClass('push');
            $(".skin").addClass("push");
          }else if(key == "blue"){
            $('.skin').removeClass('skin-white');
            $('.skin').removeClass('skin-black');
            $('.skin').removeClass('skin-blue');
            $('.skin').addClass('skin-blue');
          }else if(key == "white"){
            $('.skin').removeClass('skin-white');
            $('.skin').removeClass('skin-black');
            $('.skin').removeClass('skin-blue');
            $('.skin').addClass('skin-white')
          }else if(key == "black"){
            $('.skin').removeClass('skin-white');
            $('.skin').removeClass('skin-black');
            $('.skin').removeClass('skin-blue');
            $('.skin').addClass('skin-black')
          }
        };
        $scope.user = Projets.query({
          username: $rootScope.userAuth.username,
          secret: $rootScope.userAuth.secret,
          id: $cookies.get('id')
        },
        function(data) {
          $scope.doneTickets=0;
          for(var i = 0; i<data[0].idtick.length;i++){
            if(data[0].idtick[i].etat == 1){
              $scope.doneTickets++;
            }
          }
        },
        function(err) {
          console.log(err);
          $scope.error = err.status;
        });


      }

      $scope.$on('logged', function (event, data) {
        $rootScope.logged = data;
        reload();

    });

        // button logout clicked, remove the stored cookies
      $scope.logout = function() {
        $cookies.remove("username");
        $cookies.remove("id");
        $cookies.remove("secret");
        $rootScope.userAuth = undefined
        $window.location = '#/login';
        return;
      }
    }
  }])
  .controller('signupController', ['$rootScope', '$scope', '$window', '$cookies', 'Signup', function($rootScope, $scope, $window, $cookies, Signup) {
    //
    $scope.user = {};
    $scope.validForm = function() {
      Signup.post(
        $scope.user,
        function(data) {
          var id = data.id;
          $scope.error = "";
          $scope.success = data.username
          $rootScope.logged = true;
        },
        function(err) {
          console.log(err);
          $scope.error = err.status;
        });
    }
  }])
  .controller('projetControlleur', ['$rootScope', '$scope', '$window', '$cookies', '$routeParams', 'AddTicket', 'GetTicket', 'ChangeTicket', 'DeleteTicket','Projet', function($rootScope, $scope, $window, $cookies, $routeParams, AddTicket, GetTicket, ChangeTicket, DeleteTicket, Projet) {
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
    $scope.deleted = $rootScope.theme;
    var date = new Date();
    $scope.idproj = $routeParams.id;
    $scope.ticket = {
      username: $rootScope.userAuth.username,
      secret: $rootScope.userAuth.secret,
      idproj: $routeParams.id,
      datecrea: date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate(),
      iddev: $cookies.get('id')
    }
    $scope.ischef = false;
    Projet.get($scope.ticket, function(data) {
      $scope.projet = data;
      if($scope.ticket.iddev == data.idchef.id){
        $scope.ischef = true;
      }
      console.log(data);
    }, function(err) {
      console.log(err);
      $scope.error = err.status;
    });
    $scope.addTicket = function() {
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
      var cpt = data.length;
      for(var i = 0; i< data.length; i++){
        if(data[i].etat == 0){
          cpt--;
        }
      }
      $scope.doneTickets = cpt
      $scope.success = data.username
    }, function(err) {
      console.log(err);
      $scope.error = err.status;
    });
    $scope.setOk = function(index) {
      $scope.tickets[index].etat = 0
      $scope.doneTickets--;
      $.extend($scope.tickets[index], {
        username: $rootScope.userAuth.secret
      });
      console.log($scope.tickets[index]);
      ChangeTicket.post($scope.tickets[index], function(data) {
        console.log(data);
        $scope.tickets[index] = data

      }, function(err) {
        console.log(err);
        $scope.error = err.status;
      });
    }
    $scope.setNotOk = function(index) {
      $scope.tickets[index].etat = 1
      $scope.doneTickets++;
      $.extend($scope.tickets[index], {
        username: $rootScope.userAuth.username,
        secret: $rootScope.userAuth.secret
      });
      ChangeTicket.post($scope.tickets[index], function(data) {
        console.log(data);
        $scope.tickets[index] = data
      }, function(err) {
        console.log(err);
        $scope.error = err.status;
      });
    }
    $scope.remove = function(index) {
      $.extend($scope.tickets[index], {
        username: $rootScope.userAuth.username,
        secret: $rootScope.userAuth.secret
      });
      DeleteTicket.post($scope.tickets[index], function(data) {
        $scope.tickets.splice(index, 1);
        var cpt = $scope.tickets.length;
        for(var i = 0; i< data.length; i++){
          if(data[i].etat == 0){
            cpt--;
          }
        }
        $scope.doneTickets = cpt

      }, function(err) {
        console.log(err);
        $scope.error = err.status;
      });
    }
  }])
  .controller('teamController', ['$rootScope', '$scope', '$window', '$cookies', 'Team', '$routeParams', 'Users', 'AddUser', 'RemoveUser','Projet', function($rootScope, $scope, $window, $cookies, Team, $routeParams, Users, AddUser, RemoveUser,Projet) {
    //
    var params = {
      username: $rootScope.userAuth.username,
      secret: $rootScope.userAuth.secret,
      idproj: $routeParams.id,
      iddev:  $cookies.get('id')
    }
    $scope.idproj = $routeParams.id
    Team.get(
      params,
      function(data) {
        $scope.coolabs = data;
      },
      function(err) {
        console.log(err);
        $scope.error = err.status;
      });
      $scope.ischef = false;

    Users.get(
      params,
      function(data) {
        $scope.users = data;
      },
      function(err) {
        console.log(err);
        $scope.error = err.status;
      });
      Projet.get(params,
        function(data) {
        $scope.projet = data;
        if(params.iddev == data.idchef.id){
          $scope.ischef = true;
        }
        console.log(data);
      }, function(err) {
        console.log(err);
        $scope.error = err.status;
      });
    $scope.addCoolab = function(index) {
      params = {
        username: $rootScope.userAuth.username,
        secret: $rootScope.userAuth.secret,
        idproj: $routeParams.id,
        iddev: $scope.users[index].id
      }
      AddUser.post(
        params,
        function(data) {
          $scope.coolabs[$scope.coolabs.count] = data
        },
        function(err) {
          console.log(err);
          $scope.error = err.status;
        });
    }
    $scope.remove = function(index) {
      params = {
        username: $rootScope.userAuth.username,
        secret: $rootScope.userAuth.secret,
        idproj: $routeParams.id,
        iddev: $scope.users[index].id
      }
      RemoveUser.post(
        params,
        function(data) {

        delete  $scope.coolabs[index];
        },
        function(err) {
          console.log(err);
          $scope.error = err.status;
        });
    }
  }])
  .controller('ajouterDiscussionController', ['$rootScope', '$scope', '$window', '$cookies', 'Discussion', '$routeParams', function($rootScope, $scope, $window, $cookies, Discussion, $routeParams) {
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
    $scope.id = $routeParams.id

    var date = new Date();
    $scope.discussion = {
      username: $rootScope.userAuth.username,
      secret: $rootScope.userAuth.secret,
      datecrea: date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate(),
      idproj: $routeParams.id
    };
    $scope.validForm = function() {
      Discussion.post(
        $scope.discussion,
        function(data) {
          var id = data.id;
          $scope.error = "";
          $scope.success = "ajouté"
        },
        function(err) {
          console.log(err);
          $scope.error = err.status;
        });
    }

  }])
  .controller('DiscussionsController', ['$rootScope', '$scope', '$window', '$cookies', 'Discussions', '$routeParams','Projet', function($rootScope, $scope, $window, $cookies, Discussions, $routeParams,Projet) {
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
    $scope.id = $routeParams.id

    var date = new Date();
    var params = {
      username: $rootScope.userAuth.username,
      secret: $rootScope.userAuth.secret,
      datecrea: date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate(),
      idproj: $routeParams.id
    };
    $scope.ischef = false;
    Projet.get(params, function(data) {
      $scope.projet = data;
      if($cookies.get('id') == data.idchef.id){
        $scope.ischef = true;
      }
      console.log(data);
    }, function(err) {
      console.log(err);
      $scope.error = err.status;
    });
    Discussions.get(params,
      function(data) {
        $scope.discussions = data;
        $scope.error = "";
      },
      function(err) {
        console.log(err);
        $scope.error = err.status;
      });
  }])
  .controller('MessagesDiscussionController', ['$rootScope', '$scope', '$window', '$cookies', 'Messages', '$routeParams', function($rootScope, $scope, $window, $cookies, Messages, $routeParams) {
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
    $scope.id = $routeParams.id

    var date = new Date();
    var params = {
      username: $rootScope.userAuth.username,
      secret: $rootScope.userAuth.secret,
      datecrea: date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate(),
      iddisc: $routeParams.iddisc,
      iddev: $cookies.get('id')
    };

    Messages.get(params,
      function(data) {
        $scope.messages = data;
        $scope.error = "";
      },
      function(err) {
        console.log(err);
        $scope.error = err.status;
      });

    $scope.message = params
    $scope.ajouterMessage = function() {
      Messages.post($scope.message,
        function(data) {
          $scope.messages.push(data);
          $scope.error = "";
        },
        function(err) {
          console.log(err);
          $scope.error = err.status;
        });
    }
  }])
  .controller('RssController', ['$rootScope', '$scope', '$window', '$cookies', 'Rss', '$routeParams','Projet', function($rootScope, $scope, $window, $cookies, Rss, $routeParams,Projet) {
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
    $scope.id = $routeParams.id

    var params = {
      username: $rootScope.userAuth.username,
      secret: $rootScope.userAuth.secret,
      idproj: $routeParams.id
    }
    $scope.ischef = false;
    Projet.get(params, function(data) {
      $scope.projet = data;
      if($cookies.get('id') == data.idchef.id){
        $scope.ischef = true;
      }
      console.log(data);
    }, function(err) {
      console.log(err);
      $scope.error = err.status;
    });
    Rss.get(params,
      function(data) {
        $scope.rss = data ;
        $scope.error = "";
      },
      function(err) {
        console.log(err);
        $scope.error = err.status;
      });
  }])
  ;
