<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file Application.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 03/02/19 at 17:29
 */

namespace Apli\Web;

use Apli\Core\Application\WebApplication;

/**
 * Class Application
 * @package Apli\Web
 */
class Application extends WebApplication
{
    /**
     * Property name.
     *
     * @var  string
     */
    protected $name = 'web';

    /**
     * Property configPath.
     *
     * @var  string
     */
    protected $rootPath = APLI_ROOT;

    /**
     * initialise
     *
     * @return  void
     */
    protected function init()
    {
        parent::init();
    }

    /**
     * Prepare execute hook.
     *
     * @return  void
     */
    protected function prepareExecute()
    {
        //
    }

    /**
     * Post execute hook.
     */
    protected function postExecute()
    {
        //
    }
}
