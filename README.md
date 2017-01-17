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

Copy the file `config/app.default.php` to `config/app.php`, read and edit `config/app.php` and setup the 'Datasources'.

Run this command to install the dependencies:
```bash
php composer.phar install
```

In `/vendor/burzum/cakephp-simple-rbac/src/Auth/SimpleRbacAuthorize.php`, comment the IF `if (is_string($user[$roleField]))` because this plugin(ROLE) it does not allow validate numbers!

## Database

Create database Mysql:
```bash
CREATE SCHEMA `cake3api_app` DEFAULT CHARACTER SET utf8 ;
```

Run this command for import data to database:

```bash
bin/cake migrations migrate
```
## Testing

#### Access not authorizing

Execute this command in terminal, this is a access do not authorizing:
```bash
curl -X GET -H "Accept: application/json"  "http://localhost/cake3api.app/api/cocktails"
```
Return:
```bash
{
    "message": "You are not authorized to access that location.",
    "url": "\/cake3api.app\/api\/cocktails",
    "code": 401
}
```

#### Create user:

Execute this command in terminal to create a new user and getting the access token return for next command:
```bash
curl -X POST -H "Accept: application/json" -H "Content-Type: application/json" -H "Cache-Control: no-cache" -H "Postman-Token: 0f0fb402-9747-1a74-ec8d-75a9c27727c1" -d '{
	"username":"admin",
	"password":"admin",
    "role_id":2,
	"active":true
}' "http://localhost/cake3api.app/api/users/register"
```

#### List Cocktails!
```bash
curl -X GET -H "Accept: application/json" -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImV4cCI6MTQ4NDgzNzU3N30.XjzTVNFIJ-P1S2wMHml-mNSW1PUOrKQ53iybi0RGP_4" -H "Cache-Control: no-cache" -H "Postman-Token: 819cdbce-24c4-66ae-42ab-41a55f12752a" "http://localhost/cake3api.app/api/cocktails"
```
