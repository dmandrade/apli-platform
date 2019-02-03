<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file web.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 03/02/19 at 19:14
 */

use Apli\Support\Arr;

/*
 * Web Config
 * -------------------------------------
 * Things you config here will be used in web environment.
 */
return Arr::mergeRecursive(include __DIR__.'/windwalker.php', [
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
     * Register Routing Files
     * -------------------------------------
     * If you have more routing files, please add them here. You can also override
     * core routing files, use same key name to override it.
     */
    'routing' => [
        'files' => [
            'web' => APLI_ETC.'/routing.php'
        ]
    ],

    /*
     * Http Middlewares
     * -------------------------------------
     * Register middlewares to Application, these middleware will execute one by one
     * and wrap the core process that you can add your logic before and after main
     * execution code.
     *
     * Use numeric key name to control the execution ordering, the biggest number will
     * execute first, and the smaller number will nearer to core logic.
     *
     * Uncomment the line below to override core middlewares.
     */
    'middlewares' => [
        // Add something here...
    ],

    /*
     * Config Files
     * -------------------------------------
     * Add config to customize your application
     */
    'configs' => [
        // Add something here...
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
     * Register Error Handler Classes
     */
    'error' => [
        'handlers' => [
            // Add something here...
        ]
    ],

    /*
     * Register User Auth Handlers
     */
    'user' => [
        'handler' => null,
        'methods' => [
        ],
        'policies' => [
        ]
    ]
]);
