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
  

### usage:

- clone project
- run "ant init" to run tests and metrics
- run "ant init package -DTAG_TO_BUILD=your_tag_id" to build a release in folder "releases"
