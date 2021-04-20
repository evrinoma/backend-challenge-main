# MyHammer Backend Coding Challenge

**Please, have this project running on your computer before we do the challenge, so we can start right away with coding :)**

This project contains a PHP 8.0 and a Nginx container.
It includes the following tools/libraries:
* Xdebug (see Dockerfile for options)
* Composer 2
* PHPUnit 9.5
* Full Symfony (Flex) 5.x

Nginx will run on port 8080

Please to start the project & wait building till the end. After that check the tests var/log/test.log:
```shell
$ docker-compose up -d && echo $(docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' php80.clean) php80.clean >> /etc/hosts
```
There are 2 tests, just to make sure that the basics are working. You should see an output like
```
PHPUnit 9.5.1 by Sebastian Bergmann and contributors.

Testing 
..                                                                  2 / 2 (100%)

Time: 00:01.527, Memory: 22.00 MB

OK (2 tests, 3 assertions)
```
How to connect to container
docker exec -it php80.clean bash -l
or 
ssh root@php80.clean with credentials
login: root
pass:  1234

## AutoDeploy
Docker enviroment description:
```
PHP images only for developer mode
environment:
    - ENGINE=httpd - httpd or nginx
    - DEPLOY=yes - enable mode
    - MODE=dev - remove xdebug if value prod
    - NODEJS= - version nodejs
    - git_clone_link=https:/github.com/...
    - git_clone_dir=/opt/WWW/projects/httpd
    - web_conf=/opt/WWW/projects/httpd/cont.api/vhost.conf - path to config
    - web_dir=/opt/WWW/projects/httpd/cont.api - path to project folder
or
environment:
    - ENGINE=httpd - httpd or nginx
    - DEPLOY=yes - enable mode
    - SYMFONY=yes - only for symfony app
    - MODE=dev - remove xdebug if value prod
    - NODEJS= - version nodejs
    - git_clone_link=https:/github.com/.....
    - git_clone_dir=/opt/WWW/projects/httpd 
    - web_dir=/opt/WWW/projects/httpd/cont.api/public - path to public folder
    - web_server=my.dns.name - server name you could set it in /etc/hosts
    - web_alias=alias - short server name (apache)


