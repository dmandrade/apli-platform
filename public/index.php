<?php

use Apli\Web\Application;

require '../bootstrap/autoload.php';

/** @var Application $app */
$app = require '../bootstrap/app.php';

$router = $app->router;

// map a route
$router->get('', \Main\Controller\Main\GetMain::class)
    ->middleware(new \Main\Controller\Main\SomeMiddleware);

$router->group('/grupo/', function (\Apli\Router\RouteGroup $router) {
    $router->get('/teste/{id}', \Main\Controller\Main\GetMain::class);
    $router->group('/subgrupo', function (\Apli\Router\RouteGroup $router) {
        $router->get('/teste.html', \Main\Controller\Main\GetMain::class);
        $router->get('/subteste/', \Main\Controller\Main\GetMain::class);
    });
});

$app->execute();
