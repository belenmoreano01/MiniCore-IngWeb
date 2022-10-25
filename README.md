#  INGENIERÍA WEB - ANDREA MOREANO 
## LARAVEL - PHP 

Laravel es un popular framework de PHP. Permite el desarrollo de aplicaciones web totalmente personalizadas de elevada calidad. Laravel es un framework PHP

## MINICORE DE PARQUEADEROS

Este proyecto consiste en una aplicación de parqueaderos en las que se tienen 4 tablas: Pase, Persona, Tipo y Uso. Cada vez que un pase se use se creará un item en la tabla de usos. El tipo de pase nos indica cuantas pasadas se obtienen en total, el costo y la duración

# Development
Para correr el proyecto localmente es importante tener descargado "composer", y a continuación se necesitan ingresar los siguientes comandos:

composer install

composer cache-clear

php artisan key:generate

php artisan optimize

php artisan migrate --fresh

php artisan db:seed

Y finalmente el comando "php artisan serve"

# Deploy en la nube
Para hacer un deploy en la nube de este proyecto, se utilizó Heroku que es gratuito
Para más información de uso, acceder a: https://id.heroku.com/login

Link de la aplicación: http://morning-springs-00644.herokuapp.com/login

# Créditos
Nombre: Andrea Moreano

Correo: belen_moreano25@hotmail.com