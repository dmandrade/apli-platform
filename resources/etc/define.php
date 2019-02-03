<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file define.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 03/02/19 at 19:14
 */

use Symfony\Component\Dotenv\Dotenv;

// ROOT PATHS
define('APLI_ROOT', realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'));
define('APLI_BIN', APLI_ROOT.DIRECTORY_SEPARATOR.'bin');
define('APLI_PUBLIC', APLI_ROOT.DIRECTORY_SEPARATOR.'public');
define('APLI_RESOURCES', APLI_ROOT.DIRECTORY_SEPARATOR.'resources');
define('APLI_SOURCE', APLI_ROOT.DIRECTORY_SEPARATOR.'src');
define('APLI_STORAGE', APLI_ROOT.DIRECTORY_SEPARATOR.'storage');
define('APLI_VENDOR', APLI_ROOT.DIRECTORY_SEPARATOR.'vendor');

// STORAGE PATHS
define('APLI_CACHE', APLI_STORAGE.DIRECTORY_SEPARATOR.'cache');
define('APLI_LOGS', APLI_STORAGE.DIRECTORY_SEPARATOR.'logs');
define('APLI_TEMP', APLI_STORAGE.DIRECTORY_SEPARATOR.'artifacts');

// RESOURCE PATHS
define('APLI_ETC', APLI_RESOURCES.DIRECTORY_SEPARATOR.'etc');
define('APLI_CONFIG', APLI_ETC.DIRECTORY_SEPARATOR.'config');
define('APLI_DATABASE', APLI_RESOURCES.DIRECTORY_SEPARATOR.'database');
define('APLI_LANGUAGES', APLI_RESOURCES.DIRECTORY_SEPARATOR.'languages');
define('APLI_TEMPLATES', APLI_RESOURCES.DIRECTORY_SEPARATOR.'templates');
define('APLI_MIGRATIONS', APLI_DATABASE.DIRECTORY_SEPARATOR.'migrations');
define('APLI_SEEDERS', APLI_DATABASE.DIRECTORY_SEPARATOR.'seeders');

$env = APLI_ROOT.'/.env';

if (is_file($env)) {
    (new Dotenv())->load($env);
}
