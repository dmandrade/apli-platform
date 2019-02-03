<?php
/**
 *  Copyright (c) 2019 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 * @project apli
 * @file DevApplication.php
 * @author Danilo Andrade <danilo@webbingbrasil.com.br>
 * @date 03/02/19 at 17:29
 */

namespace Apli\Web;

use Apli\Data\Map;
use Apli\Environment\Environment;
use Apli\Http\Message\ServerRequest;

/**
 * The DevApplication class.
 *
 * @since  2.1.1
 */
class DevApplication extends Application
{
    /**
     * Property mode.
     *
     * @var  string
     */
    protected $name = 'dev';

    /**
     * DevApplication constructor.
     * @param ServerRequest|null $request
     * @param Map|null           $config
     * @param Environment|null   $environment
     */
    public function __construct(ServerRequest $request = null, Map $config = null, Environment $environment = null)
    {
        parent::__construct($request, $config, $environment);

        $this->boot();
    }
}
