Symfony

symfony console doctrine:database:create
symfony console doctrine:migrations:migrate
symfony console doctrine:fixtures:load
symfony console doctrine:database:drop --force
symfony console make:migration


php bin/console console doctrine:database:drop --force 
php bin/console console doctrine:database:create 
php bin/console console make:migration 
php bin/console console doctrine:migrations:migrate


php -S 127.0.0.1:8000 -t public

symfony console make:auth
symfony console make:registration-form


install
composer create-project symfony/website-skeleton projectName
composer install

cd projectNmae
symfony serve
http://localhost:8000

Controller
symfony console make:controller

Fixtures
composer require --dev orm-fixtures (recette flex)
composer require --dev fzaninotto/faker

symfony console make:fixtures
symfony console doctrine:fixtures:load

Create user
php bin/console app:create-user

Doctrine	
symfony console doctrine:database:create
symfony console make:migration
symfony console doctrine:migrations:migrate
symfony console doctrine:schema:update

symfony console make:docker:database

Si bug migration

Etape 1 :
symfony console doctrine:migrations:version YYYYMMDDHHMMSS --delete
symfony console doctrine:migrations:execute YYYYMMDDHHMMSS --down
Etape 2 : 
delete manuel fichiers
delete in database, si il y a encore des table

php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create

Etape 3 :
symfony console make:migration
symfony console doctrine:migrations:migrate

Editer entity
Etape 1 :
symfony console make:entity NameOfEntity
Etape 2 :
add attributes
Etape 3 :
symfony console make:migration
symfony console doctrine:migrations:migrate

User
symfony console make:user

Create form
symfony console make:form



Résolution bug
accès informations company problème id
bug page profil entreprise, informations personnels (erreur si pas d’informations renseigné)



Créer les attributs
doctrine:generate pour générer les getters et setters

