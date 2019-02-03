<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file console.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 03/02/19 at 19:14
 */

use Apli\Support\Arr;

/*
 * Console Config
 * -------------------------------------
 * Things you config here will be used in console environment.
 */
return Arr::mergeRecursive(include __DIR__.'/apli.php', [
    /*
     * Packages
     * -------------------------------------
     * Register new packages to Application. The key is package name (alias).
     */
    'packages' => [
        // Add something here...
    ],

    /*
     * Provider
     * -------------------------------------
     * Register service providers to Container.
     *
     * The packages must provides a Apli service provider interface.
     */
    'providers' => [
        // Add something here...
    ],

    /*
     * Commands
     * -------------------------------------
     * Add your own commands to system.
     */
    'console' => [
        'commands' => [
            // Add something here...
        ]
    ],

    /*
     * Load Config Files
     * -------------------------------------
     * Add config file to customize your application
     */
    'configs' => [
        // Add something here...
    ],

    /*
     * Listeners
     * -------------------------------------
     * Add event listeners to Dispatcher
     */
    'listeners' => [
        // Add something here...
    ]
]);
