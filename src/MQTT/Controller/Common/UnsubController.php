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

class UnsubController extends MqttController
{
    public function doExecute()
    {
        echo "redis connect", PHP_EOL;
        return true;
    }
}
