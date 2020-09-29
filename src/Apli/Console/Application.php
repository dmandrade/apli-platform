<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file Application.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 17/11/19 at 20:56
 */

/**
 * Created by PhpStorm.
 * User: Danilo
 * Date: 17/11/2019
 * Time: 20:56
 */

namespace Apli\Console;


use Apli\Application\AbstractCliApplication;

class Application extends AbstractCliApplication
{

    /**
     * Method to run the application routines. Most likely you will want to instantiate a controller
     * and execute it, or perform some sort of task directly.
     *
     * @return mixed
     */
    protected function doExecute()
    {
        $this->out('A base cli application');
    }
}
