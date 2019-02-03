<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file config.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 03/02/19 at 19:14
 */

use Apli\Support\Arr;

return Arr::mergeRecursive(
// Load with namespace
    [
        'dev' => require APLI_CONFIG.'/dev.php',
        'system' => require APLI_CONFIG.'/system.php',
        'logs' => require APLI_CONFIG.'/logs.php',
        'error' => require APLI_CONFIG.'/error.php',
        'database' => require APLI_CONFIG.'/database.php',
        'session' => require APLI_CONFIG.'/session.php',
        'routing' => require APLI_CONFIG.'/routing.php',
        'cache' => require APLI_CONFIG.'/cache.php',
        'crypt' => require APLI_CONFIG.'/crypt.php',
        'asset' => require APLI_CONFIG.'/asset.php',
        'language' => require APLI_CONFIG.'/language.php',
        'console' => require APLI_CONFIG.'/console.php',
        'mail' => require APLI_CONFIG.'/mail.php',
        'queue' => require APLI_CONFIG.'/queue.php',
    ],

    // Load custom values
    is_file(__DIR__.'/config/custom.php') ? require __DIR__.'/config/custom.php' : []
);
