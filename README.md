# Slim Framework 4 Skeleton Application

Use this skeleton application to quickly setup and start working on a new Slim Framework 4 application. This application uses the latest Slim 4 with Slim PSR-7 implementation and PHP-DI container implementation along with the PHP-View template renderer. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

Create a new directory with your project name, e.g:


```bash
mkdir newProject
```

Once inside the new directory, clone this repo:

```bash
git@github.com:GenadiKozarev/to-do-list.git .
```

One cloned, you must install the slim components by running:

```bash
composer install
```

To run the application locally:
```bash
composer start

```
Run this command in the application directory to run the test suite
```bash
composer test
```

## Setup MySQL database

Create a new database called "to-do-app" and a table named "tasks".
The table should have a VARCHAR entity 'title' and a TINYINT entity 'completed'.

Visit http://localhost:8080/ and start adding tasks in your brand new To-Do-List

Enjoy!
