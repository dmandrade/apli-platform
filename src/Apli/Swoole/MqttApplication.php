<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 * @project apli
 * @file Application.php
 * @author Danilo Andrade <danilo@webbingbrasil.com.br>
 * @date 17/11/19 at 19:16
 */

namespace Apli\Swoole;

use Apli\Application\AbstractApplication;
use Apli\Application\WithEnvironment;
use Apli\Data\Map;
use Apli\Environment\Environment;
use Apli\MQTT\MQTT;
use Apli\MQTT\Task;
use Apli\Router\Router;
use Apli\Support\Str;
use Swoole\Server as SwooleServer;
use function gmdate;
use function time;

/**
 * Class Application
 *
 * @property-read  Router $router
 *
 * @package Apli\Web
 */
class MqttApplication extends AbstractApplication
{
    use WithEnvironment;

    /**
     * @var SwooleServer
     */
    protected $swooleServer;
    /**
     * @var MQTT
     */
    protected $mqtt;
    /**
     * Property configPath.
     *
     * @var  string
     */
    protected $rootPath = APLI_ROOT;

    /**
     * Property router.
     *
     * @var  Router
     */
    protected $router;

    /**
     * @var array
     */
    protected $allowGetProperties = [
        'config',
        'logger'
    ];

    /**
     * AbstractWebApplication constructor.
     *
     * @param HttpFactoryInterface|null $httpFactory
     * @param Map|null $config
     * @param Environment|null $environment
     *
     * @throws UriException|InvalidArgumentException
     */
    public function __construct(
        Map $config = null,
        Environment $environment = null
    )
    {
        $this->setEnvironment($environment);

        // Call the constructor as late as possible (it runs `init()`).
        parent::__construct($config);

        $this->set('execution.datetime', gmdate('Y-m-d H:i:s'));
        $this->set('execution.timestamp', time());
    }

    /**
     * Execute the application.
     *
     * @return void
     */
    public function doExecute(): void
    {
        $host = '127.0.0.1';
        $port = 1884;
        $this->swooleServer = new SwooleServer($host, $port, SWOOLE_BASE);
        $this->mqtt = new MQTT();

        $this->swooleServer->on('start', [$this, 'onStart']);
        $this->swooleServer->on('task', [$this, 'onTask']);
        $this->swooleServer->on('finish', [$this, 'onFinish']);
        $this->swooleServer->on('connect', [$this, 'onConnect']);
        $this->swooleServer->on('close', [$this, 'onClose']);

        $this->swooleServer->on('close', function ($server, $fd) {
            echo "Client: Close.\n";
        });
        $this->mqtt->attachServer($this->swooleServer);
        $this->swooleServer->start();
    }

    public function onStart(SwooleServer $server)
    {
        echo "Aplí Swoole MQTT Server is started {$server->master_pid}" . PHP_EOL;
    }

    public function onConnect(SwooleServer $server, $fd, $from_id)
    {
        echo "Client connected.\n";
    }

    public function onClose(SwooleServer $server, $fd, $from)
    {
        $server->task(Task::internal('common/close/' . $fd));
    }

    public function onTask(SwooleServer $server, $worker_id, $task_id, $task)
    {
        try {
            $method = 'doExecute';
            if($task->controller === "SYS") {
                return;
            }
            $class = new \ReflectionClass('MQTT\\Controller\\' . Str::studly($task->controller) . '\\' . Str::studly($task->action) . 'Controller');
            if ($class->hasMethod($method)) {
                $actor = $class->getMethod($method);
                return $actor->invokeArgs($class->newInstanceArgs([$server, $task->fd, $task->topic, $task->verb]), [$task->param, $task->body]);
            }
            throw new \Exception($method . ' Undefined');
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }

    public function onFinish(SwooleServer $server, $task_id, $data)
    {
        echo 'Task finished #' . $task_id . '  #' . $data . PHP_EOL;
    }
}
