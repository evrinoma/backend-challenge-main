# MyHammer Backend Coding Challenge

**Please, have this project running on your computer before we do the challenge, so we can start right away with coding :)**

This project contains a PHP 8.0 and a Nginx container.
It includes the following tools/libraries:
* Xdebug (see Dockerfile for options)
* Composer 2
* PHPUnit 9.5
* Full Symfony (Flex) 5.x

Nginx will run on port 8080 (see docker-compose.yml)

To start the project & execute tests:
```shell
$ docker-compose up -d
$ docker-compose exec php composer install
$ docker-compose exec php ./bin/phpunit
```
There are 2 tests, just to make sure that the basics are working. You should see an output like
```
$ docker-compose exec php ./bin/phpunit
PHPUnit 9.5.1 by Sebastian Bergmann and contributors.

Testing 
..                                                                  2 / 2 (100%)

Time: 00:01.527, Memory: 22.00 MB

OK (2 tests, 3 assertions)
```
