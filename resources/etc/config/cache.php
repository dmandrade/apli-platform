<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file cache.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 03/02/19 at 17:29
 */

return [
    // Disabled cache will make all cache as null
    'enabled' => false,

    // The default cache profile
    'default' => 'global',

    // Cache profiles
    'profiles' => [
        'global' => [
            // The name or subfolder of different storage settings.
            'name' => 'apli',

            // The cache driver, can be driver name or class.
            'driver' => null,

            // Cache serializer decided how to serialize and store data into storage. can be name or class.
            'serializer' => null,

            // Cache time (minutes)
            'time' => 15
        ]
    ]
];
