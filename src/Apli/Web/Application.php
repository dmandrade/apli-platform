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
     * Property configPath.
     *
     * @var  string
     */
    protected $rootPath = APLI_ROOT;

}
