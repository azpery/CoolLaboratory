# CoolLaboratory
##Install
####$ git clone https://github.com/azpery/CoolLaboratory.git
####cd CoolLaboratory
####$ php composer.phar install
####Config de la base de données
Dans ./app/config/parameters.yml:
	Changer :
	database_name: nomdb
	database_user: login
	database_password: password
Dans votre sgbd:
	Créez votre base de données avec le nom enregistré dans les paramètres
####$ php app/console doctrine:schema:update --force
####$ php app/console server:run
Dans votre navigateur:
http://localhost:8000/
Créez vous un compte, vous pouvez commencer à tester l'application
