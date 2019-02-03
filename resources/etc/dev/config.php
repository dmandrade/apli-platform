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
    [
        'system' => [
            'debug' => true,
            'error_reporting' => -1,
            'offline' => false,
        ],

        'cache' => [
            'enabled' => false,
        ],

        'language' => [
            'debug' => true,
        ],

        'whoops' => [
            'editor' => env('WHOOPS_EDITOR') ?? 'phpstorm'
        ]
    ]
);
