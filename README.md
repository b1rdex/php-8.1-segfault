## This is a test repository with a PHP 8.1 segfault problem

Steps to reproduce:

1. Install deps:
`docker run --rm -v ${PWD}:/app -w /app composer install`

2. Run the test code on PHP 8.0 to be sure there is no problem with it:
`docker run --rm -v ${PWD}:/app -w /app php:8.0-cli vendor/bin/phpunit -vvv Test.php; echo $?`

3. Run the same code on PHP 8.1 and see a segmentation fault:
`docker run --rm -v ${PWD}:/app -w /app php:8.1-cli vendor/bin/phpunit -vvv Test.php; echo $?`
