<?php
/**
 *  Copyright (c) 2018 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file GetTeste.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 04/09/18 at 15:38
 */

/**
 * Created by PhpStorm.
 * User: Danilo
 * Date: 04/09/2018
 * Time: 15:38
 */

namespace Main\Controller\Main;


use Apli\Http\Message\ServerRequest;
use Apli\Http\Response\DefaultResponse;

class GetMain
{
    public function __invoke(ServerRequest $request)
    {
        $response = new DefaultResponse();
        $response->getBody()->write('<h1>Hello, World!</h1>');
        return $response;
    }
}
