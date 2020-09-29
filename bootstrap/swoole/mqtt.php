<?php
/*
 *  Copyright (c) 2020 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file mqtt.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 13/09/20 at 16:17
 */

use Apli\Swoole\MqttApplication;

$app = new MqttApplication();

define('APLI_DEBUG', $app->get('system.debug'));

return $app;
