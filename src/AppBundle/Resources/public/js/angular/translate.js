var app = angular.module('CoolLab.translate', ['pascalprecht.translate']);

app.config(function ($translateProvider) {
  $translateProvider.translations('fr', {
    headerSeConnecter:'Se connecter',
    pAideConnexion:'Entrez votre nom utilisateur pour vous connecter.',
    login:'Nom d\'utilisateur',
    password:'Mot de passe',
    btnNvProjet:'+ Commencer un nouveau projet',
    btnConnect:'Se connecter',
    btnSignUp:'s\'enregistrer',
    headerProject:'Projets',
    pProjet:'Tous les projets sur lesquel vous travaillez',
    pSuccessConnect:'Vous avez maintenant acces à l\'api et au site',
    by:'par',
    headerNvProjet:'Nouveau Projet',
    pNvProjet:'Après avoir créé ce nouveau projet, vous pourrez commencer à travailler avec vos Cool laborateurs.',
    labelNomProj:'Nom du projet*',
    labelDescription:'Description',
    labelCateg:'Catégorie',
    helpCateg:'Choisissez un catégorie pour rester organisé',
    btnValidNvProjet:'Créer le projet',
    btnAnnuler:'Annuler',
    btnRetourProjets:'↩ Projets',
    placeHolderCategorie:'Categorie',
    placeHolderNomProj:'Entrez le nom du projet',
    placeHolderDescription:'Decrivez votre projet',
    labelTabTicket:'Tickets',
    labelTabDiscussion:'Discussion',
    labelTabActivite:'Activité',
    btnCoollab:'Cool-laborateurs',
    btnInfo:'Info du projet',
    placeHolderNvTkNom:'Entrez un nom pour le ticket',
    labelDescriptionTk:'Description',
    btnAjoutTk:'Ajouter le ticket',
    headerTickets:'Progression du projet',
    sur:'sur',
    labelTkEnCours:'Tickets en cours.',
    btnOuvrirDisc:'+ Ouvrir une discussion',
    labelRecentDisc:'Discussions récentes',
    btnFluxRss:'Accéder au flux RSS'
  });
  $translateProvider.translations('en', {
    headerSeConnecter:'Login',
    pAideConnexion:'Enter a valid username to log in.',
    login:'Login',
    password:'Password',
    btnNvProjet:'+ Start a new project',
    btnConnect:'Login',
    btnSignUp:'Sign in',
    headerProject:'Projects',
    pProjet:'All the projects you are working on',
    pSuccessConnect:'You have now access to the web API and the website',
    by:'by',
    headerNvProjet:'New project',
    pNvProjet:'After creating a new project, you will be able to start working with your cool laborators',
    labelNomProj:'Project name*',
    labelDescription:'Description',
    labelCateg:'Category',
    helpCateg:'Choose a category to stay organised',
    btnValidNvProjet:'Create the project',
    btnAnnuler:'Cancel',
    btnRetourProjets:'↩ Projects',
    placeHolderCategorie:'Category',
    placeHolderNomProj:'Enter the project name',
    placeHolderDescription:'Describe your project',
    labelTabTicket:'Tasks',
    labelTabDiscussion:'Discussion',
    labelTabActivite:'Activity',
    btnCoollab:'Cool-laborators',
    btnInfo:'Info of the project',
    placeHolderNvTkNom:'Enter a name for the task',
    labelDescriptionTk:'Description',
    btnAjoutTk:'Add a new task',
    headerTickets:'Project progression',
    sur:'on',
    labelTkEnCours:'On doing tasks.'
  });
  $translateProvider.translations('mo', {
    headerSeConnecter:'нэвтрэн',
    pAideConnexion:'Нэвтрэх Хэрэглэгчийн нэрээ оруулна уу.',
    login:'Хэрэглэгчийн нэр',
    password:'нууц үг',
    btnNvProjet:'+ Шинэ төсөл эхлэх',
    btnConnect:'Se connecter',
    btnSignUp:'нэвтрэн',
    headerProject:'төсөл',
    pProjet:'Та дээр ажиллаж байгаа бүх төсөл',
    pSuccessConnect:'Та одоо API болон сайтад нэвтрэх',
    by:'гэхэд',
    headerNvProjet:'шинэ төсөл',
    pNvProjet:'Шинэ төсөл үүсгэсний дараа, та Cool ployees хамтран ажиллаж эхлэх болно.',
    labelNomProj:'Төслийн нэр *',
    labelDescription:'танилцуулга',
    labelCateg:'зэрэг',
    helpCateg:'Зохион байгуулалттай байх ангиллыг сонгоно уу',
    btnValidNvProjet:'Төслийг бий болгох',
    btnAnnuler:'хүчингүй болгох',
    btnRetourProjets:'↩ төслүүд',
    placeHolderCategorie:'ангилал',
    placeHolderNomProj:'Төслийн нэр оруулна уу',
    placeHolderDescription:'Таны төслийг тайлбарлах',
    labelTabTicket:'хэрэгслээр зорчих тасалбар',
    labelTabDiscussion:'хэлэлцүүлэг',
    labelTabActivite:'хэлэлцүүлэг',
    btnCoollab:'үйл ажиллагаа',
    btnInfo:'Төслийн мэдээлэл',
    placeHolderNvTkNom:'Билет нь нэрийг оруулна уу',
    labelDescriptionTk:'танилцуулга',
    btnAjoutTk:'Тасалбар нэмэх',
    headerTickets:'Төслийн дэвшил',
    sur:'дээр',
    labelTkEnCours:'Одоогийн тасалбар.',
    btnOuvrirDisc:'+ Нээлттэй хэлэлцүүлэг',
    labelRecentDisc:'сүүлийн хэлэлцүүлэг'
  });
  $translateProvider.preferredLanguage('fr');
});

app.controller('translatectl', function ($scope, $translate) {
  $scope.changeLanguage = function (key) {
    $translate.use(key);
  };
});
