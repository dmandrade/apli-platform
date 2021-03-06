<?php
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/
$root = __DIR__ . '/..';

require $root . '/bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

/** @var \Apli\Swoole\HttpApplication $app */
$app = require $root . '/bootstrap/swoole/web.php';

$app->getRouter()->get('/', \Main\Controller\Main\GetMain::class);
$app->getRouter()->get('/index', \Main\Controller\Main\GetMain::class);
//$app->getRouter()->get('/', \Main\Controller\Main\GetMain::class);
//$app->getRouter()->get('/{id}', \Main\Controller\Main\GetSubgrupo::class);

$app->execute();
