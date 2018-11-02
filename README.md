Debería aportarse .env.dist con las variables de entorno
* `php bin/console doctrine:database:create`, se usa para crear la bd
* `php bin/console doctrine:schema:update --force`, se usa para crear las tablas a partir de las entidades
* Instalar symfony/phpunit-bridge, `composer require --dev symfony/phpunit-bridge`
* Ejecutar , `./bin/phpunit`