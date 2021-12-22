## This is a test repository with a PHP 8.1 segfault problem

Steps to reproduce:

1. Install deps:
`docker run --rm -v ${PWD}:/app -w /app composer install`

2. Run the test code on PHP 8.0 to be sure there is no problem with it:
`docker run --rm -v ${PWD}:/app -w /app php:8.0-cli vendor/bin/phpunit -vvv Test.php; echo $?`
```
❯ docker run --rm -v ${PWD}:/app -w /app php:8.0-cli vendor/bin/phpunit -vvv Test.php; echo $?
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.0.14

R                                                                   1 / 1 (100%)

Time: 00:00.030, Memory: 6.00 MB

There was 1 risky test:

1) Test::testMock with data set #0 (Mock_UploadedFile_447c51b0 Object (...))
This test did not perform any assertions

/app/Test.php:13

OK, but incomplete, skipped, or risky tests!
Tests: 1, Assertions: 0, Risky: 1.
0
```

3. Run the same code on PHP 8.1 and see a segmentation fault:
`docker run --rm -v ${PWD}:/app -w /app php:8.1-cli vendor/bin/phpunit -vvv Test.php; echo $?`
```
❯ docker run --rm -v ${PWD}:/app -w /app php:8.1-cli vendor/bin/phpunit -vvv Test.php; echo $?
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.1.1

139
```
