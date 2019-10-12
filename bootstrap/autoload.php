<?php

$root = __DIR__ . '/..';

if (!is_file($root . '/vendor/autoload.php')) {
    exit('Please run `composer install` First.');
}

include_once $root . '/vendor/autoload.php';
include_once $root . '/resources/etc/define.php';
