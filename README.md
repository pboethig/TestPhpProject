# testPHPProject
## This is a PHP project skelleton for your ant:ivy nexus buildsystem
### components:

- ant build task chain
- composer dependencies
  - phpmd
  - phpcs
  - phpcpd
  - dpend
  - phploc
  - phpdox

### prerequisits
- composer installed
- ant installed
  - apt-get install ant 
- nexus installed [use this docker infrastructure](https://github.com/pboethig/PhpBuildSystem)
  - installs jenkins, gitlab, nexus, a webserver (jenkins lave) and some webtools as single container in a docker network
  

### usage:
- clone project
- cd to app

```sh 
composer install
```
Run init
```sh
ant init
```

### or run a release
```sh
- run "ant package -DTAG_TO_BUILD=1.2.3.7"
```

### or run a release and deploy to nexus
```
ant package -DTAG_TO_BUILD=1.2.3.8 release-nexus
```

### sample build.properties
###### you have to store a build.properties under ~/.ant/config/build.properties witb following code
```ini
repo.protocoll=http
repo.host=localhost
repo.port=8082
repo.realm=Sonatype Nexus Repository Manager
repo.username=admin
repo.password=admin123

