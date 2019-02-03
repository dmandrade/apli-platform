<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file queue.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 03/02/19 at 17:29
 */

return [
    'connection' => env('QUEUE_CONNECTION', 'sync'),
    'sync' => [
        'driver' => 'sync'
    ],
    'database' => [
        'driver' => 'database',
        'table' => 'queue_jobs',
        'queue' => 'default',
        'timeout' => '60'
    ],
    'failer' => [
        'driver' => 'database',
        'table' => 'queue_failed_jobs'
    ]
];
