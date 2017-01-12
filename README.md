# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

Clone this project.
```bash
git clone https://github.com/AndreKrebs/cake3api.app.git
```

## Configuration

Run this command to install the dependencies:
```bash
php composer.phar install
```

Copy the file `config/app.default.php` to `config/app.php`, read and edit `config/app.php` and setup the 'Datasources'.


## Database

Create database Mysql:
```bash
CREATE SCHEMA `cake3api_app` DEFAULT CHARACTER SET utf8 ;
```

Run this command for import data to database:
```bash
bin/cake migrations migrate
```
