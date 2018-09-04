<?php

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/
if (!is_file($root . '/vendor/autoload.php')) {
    exit('Please run `composer install` First.');
}

define('DS', DIRECTORY_SEPARATOR);
define('APLI_ROOT', realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'));
include_once $root . '/vendor/autoload.php';
include_once $root . '/resources/config/define.php';