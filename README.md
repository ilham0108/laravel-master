<h1 align="center">LARA-BASE</h1>
<h3 align="center">System Auth, Debug, CRUD, Logging With Laravel</h3>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Require
1. Composer
2. NPM
3. Mysql Database
## Instalasion
1. Clone this repository
2. configure .env file
3. Run `Composer install`
4. Run `php artisan key:generate`
5. Run `php artisan passport:install`
6. Run `php artisan telescope:install`
7. Run `php artisan migrate`
8. Run `php artisan serve`
## Api
<p align="center"><img src="https://laravel.com/assets/img/components/logo-passport.svg"></p>

<p align="center">
<a href="https://github.com/laravel/passport/actions"><img src="https://github.com/laravel/passport/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/passport"><img src="https://img.shields.io/packagist/dt/laravel/passport" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/passport"><img src="https://img.shields.io/packagist/v/laravel/passport" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/passport"><img src="https://img.shields.io/packagist/l/laravel/passport" alt="License"></a>
</p>
Generate Auth System by Laravel Pasport

1. Login : `127.0.0.1/api/login`
2. Pengguna : `127.0.0.1/api/pengguna`
            : GET, PATCH, DELETE, POST
<img align="center" src="/screenshot/Screenshot (66).png" />
            
## Mail Verification 

<p align="center"><img src="https://laravel.com/assets/img/components/logo-jetstream.svg"></p>

<p align="center">
    <a href="https://github.com/laravel/jetstream/actions">
        <img src="https://github.com/laravel/jetstream/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/jetstream">
        <img src="https://img.shields.io/packagist/dt/laravel/jetstream" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/jetstream">
        <img src="https://img.shields.io/packagist/v/laravel/jetstream" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/jetstream">
        <img src="https://img.shields.io/packagist/l/laravel/jetstream" alt="License">
    </a>
</p>
Docs : https://jetstream.laravel.com/2.x/features/authentication.html

1. Model/User : implements MustVerifyEmail
2. Route/Web  : 'middleware' => 'verified'
3. Config/fortify :  Features::emailVerification()
<img align="center" src="/screenshot/Screenshot (54).png" />

## Laravel Telescope

<p align="center"><img src="https://laravel.com/assets/img/components/logo-telescope.svg"></p>

<p align="center">
<a href="https://github.com/laravel/telescope/actions"><img src="https://github.com/laravel/telescope/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/telescope"><img src="https://img.shields.io/packagist/dt/laravel/telescope" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/telescope"><img src="https://img.shields.io/packagist/v/laravel/telescope" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/telescope"><img src="https://img.shields.io/packagist/l/laravel/telescope" alt="License"></a>
</p>
Docs : https://laravel.com/docs/8.x/telescope

To enable / disable this feature, change "enabled" in config/telescope.php
<img align="center" src="/screenshot/Screenshot (58).png" />


## Laravel Log 

Docs : https://laravel.com/docs/8.x/logging#introduction
1. channel => command
2. Path storage/logs/command/command.log
<img align="center" src="/screenshot/Screenshot (59).png" />


## laravel-activitylog

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/laravel-activitylog.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-activitylog)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/spatie/laravel-activitylog/run-tests?label=tests)
![Check & fix styling](https://github.com/spatie/laravel-activitylog/workflows/Check%20&%20fix%20styling/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/laravel-activitylog.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-activitylog)

Docs : https://spatie.be/docs/laravel-activitylog/v3/introduction

To enable / disable this feature, change "enabled" in config/activitylog.php 
Usage In model : 
1. use Spatie\Activitylog\Traits\LogsActivity;
2. use LogsActivity;
3. protected static $logAttributes = ['name', 'text'];

## Screenshot APP
<img align="center" src="/screenshot/Screenshot (55).png" />

<img align="center" src="/screenshot/Screenshot (56).png" />

<img align="center" src="/screenshot/Screenshot (57).png" />

