<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file database.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 03/02/19 at 19:14
 */

return [
    // The default database connection
    'default' => 'local',

    // Supported connections
    'connections' => [
        'local' => [
            'driver' => env('DATABASE_DRIVER', 'mysql'),
            'host' => env('DATABASE_HOST', 'localhost'),
            'user' => env('DATABASE_USER', 'root'),
            'password' => env('DATABASE_PASSWORD'),
            'name' => env('DATABASE_NAME', 'apli'),
            'prefix' => env('DATABASE_PREFIX', 'apli_'),
        ],
    ]
];
