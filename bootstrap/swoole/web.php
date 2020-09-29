<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file swoole.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 12/10/19 at 13:40
 */

use Apli\Swoole\HttpApplication;

$app = new HttpApplication;

define('APLI_DEBUG', $app->get('system.debug'));

return $app;
