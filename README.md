init
# testPHPProject
## This is a PHP testpropject skelleton
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
- nexus installed [use this docker infrastructure]https://github.com/pboethig/PhpBuildSystem()
  

### usage:
- clone project
- run "ant init" to run tests and metrics
- run "ant package -DTAG_TO_BUILD=1.2.3.7" to build a release in folder "releases" and under target/zip
- run "ant package -DTAG_TO_BUILD=1.2.3.8 release-nexus" to publish your release to a nexus artifact manager


### sample build.properties
###### you have to store a build.properties under ~/.ant/config/build.properties witb following code
```ini
repo.protocoll=http
repo.host=localhost
repo.port=8082
repo.realm=Sonatype Nexus Repository Manager
repo.username=admin
repo.password=admin123

