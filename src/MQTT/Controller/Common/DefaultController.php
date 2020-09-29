<?php
/*
 *  Copyright (c) 2020 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file CloseController.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 13/09/20 at 19:19
 */

namespace MQTT\Controller\Common;

use Apli\MQTT\MqttController;

class DefaultController extends MqttController
{
    public function doExecute($action = 'default', $params = [])
    {
        echo "default", PHP_EOL;
        return $action . ' : ' .json_encode($params);
    }
}
