<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file system.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 03/02/19 at 19:14
 */

return [
    // Enable debug mode, will disable cache, and log some errors.
    'debug' => env('SYSTEM_DEBUG', false),

    // The PHP error reporting level, 0 is hide all errors, -1 is the biggest report level.
    'error_reporting' => env('SYSTEM_ERROR_REPORTING', 0),

    // Default system timezone.
    'timezone' => env('SYSTEM_TIMEZONE', 'UTC'),

    // Set system offline
    'offline' => env('SYSTEM_OFFLINE', false),

    // Secret code will be a salt to generate hashs when system running,
    'secret' => 'SomeRandomString'
];
