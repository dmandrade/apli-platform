<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file apli.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 03/02/19 at 19:14
 */

/*
 * Core Config
 * -------------------------------------
 * Config will be used in web and console environment.
 */
return [
    /*
     * Package
     * -------------------------------------
     * Register new packages to Application.
     */
    'packages' => [
        // Add something here...
    ],

    /*
     * Provider Registration
     * -------------------------------------
     * Register service providers to Container.
     */
    'providers' => [
        // Add something here...
    ],

    /*
     * Config Files
     * -------------------------------------
     * Add config to customize your application
     */
    'configs' => [
        100 => APLI_ETC.'/config.php',
    ],

    /*
     * Listeners
     * -------------------------------------
     * Add event listeners to Dispatcher, this function help us inject logic between
     * every checkpoint when system running.
     */
    'listeners' => [
        // Add something here...
    ],

    /*
     * Register DI Container Aliases
     * -------------------------------------
     * If you must override some core classes by your own, replace the target class here.
     */
    'di' => [
        'aliases' => [
            // Add something here...
        ]
    ],

    /*
     * Path Define
     * -------------------------------------
     * These paths make our core library works correctly.
     */
    'path' => [
        'root' => APLI_ROOT,
        'bin' => APLI_BIN,
        'cache' => APLI_CACHE,
        'etc' => APLI_ETC,
        'logs' => APLI_LOGS,
        'resources' => APLI_RESOURCES,
        'source' => APLI_SOURCE,
        'temp' => APLI_TEMP,
        'templates' => APLI_TEMPLATES,
        'vendor' => APLI_VENDOR,
        'public' => APLI_PUBLIC,
        'migrations' => APLI_MIGRATIONS,
        'seeders' => APLI_SEEDERS,
        'languages' => APLI_LANGUAGES,
    ]
];
