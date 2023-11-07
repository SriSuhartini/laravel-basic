<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel Starter Template

This is a Laravel Starter Template for your first projects, included Laravel/ui with vue js, bootstap and Scaffholding plus AdminLTE Template

## Features

<ul>
  <li>Have a simple role management included ['admin', 'user']</li>
  <li>Installed AdminLTE Template</li>
  <li>Installed Laravel/ui (Vue Js) and Bootstrap Template</li>
</ul>

## How to Install

1. Clone this repository to your project
2. Run `composer update`
3. copy .env.example to .env `(cp .env.example .env)`
4. Generate the application key using `php artisan key:generate`
5. Set your .env file
6. run `npm install`
7. Run database migrations and seed the database using `php artisan migrate --seed`
8. Now you have a Laravel project with the Starter Template

## How to Use

1. Split your Terminal
2. In one side run `php artisan serve` and another `npm run dev`
3. Usually you will got URL `127.0.0.1:8000` and open that URL in your browser

## Default User

Default user is `admin@admin.com` and password `admin123`. you can change in `DatabaseSeeder.php` if you want
