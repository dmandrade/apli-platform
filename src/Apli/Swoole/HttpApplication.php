<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file Application.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 17/11/19 at 19:16
 */

namespace Apli\Swoole;

use Apli\Core\Application\WebApplication;
use Apli\Http\Emitter\SwooleEmitter;
use Apli\Router\Route;
use Swoole\Runtime as SwooleRuntime;
use Swoole\HTTP\Server as SwooleHttpServer;
use function gmdate;
use function time;

/**
 * Class Application
 *
 * @property-read  Router  $router
 *
 * @package Apli\Web
 */
class HttpApplication extends WebApplication
{
    /**
     * @var SwooleHttpServer
     */
    protected $swooleServer;

    /**
     * Custom initialisation method.
     *
     * Called at the end of the AbstractApplication::__construct() method.
     * This is for developers to inject initialisation code for their application classes.
     *
     * @return void
     */
    protected function init(): void
    {
        $host = '127.0.0.1';
        $port = 8080;
        if (method_exists(SwooleRuntime::class, 'enableCoroutine')) {
            SwooleRuntime::enableCoroutine(true);
        }
        $this->swooleServer = new SwooleHttpServer($host, $port);
        $this->swooleServer->on("start", function () use ($host, $port) {
            echo "Aplí Swoole HTTP Server is started at $host:$port\n";
        });

        $this->swooleServer->set([
            'worker_num' => 2,
            'max_conn' => 1024,
        ]);
    }

    /**
     * Post execute hook.
     * @param $response
     * @return void
     */
    protected function postExecute($response): void
    {
        $this->swooleServer->on('request', function ($swooleRequest, $swooleResponse) use ($response) {
            $emitter = new SwooleEmitter($swooleResponse);
            $emitter->emit($response);
        });

        $this->swooleServer->start();
    }
}
