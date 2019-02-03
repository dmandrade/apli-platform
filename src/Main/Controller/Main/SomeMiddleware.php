<?php
/**
 *  Copyright (c) 2018 Danilo Andrade
 *
 *  This file is part of the apli project.
 *
 *  @project apli
 *  @file SomeMiddleware.php
 *  @author Danilo Andrade <danilo@webbingbrasil.com.br>
 *  @date 04/09/18 at 15:55
 */

/**
 * Created by PhpStorm.
 * User: Danilo
 * Date: 04/09/2018
 * Time: 15:55
 */

namespace Main\Controller\Main;

use Apli\Http\Response\DefaultResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class SomeMiddleware implements MiddlewareInterface
{
    /**
     * @param ServerRequestInterface  $request
     * @param RequestHandlerInterface $handler
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $queryParams = $request->getQueryParams();
        $user = isset($queryParams['user']) ? $queryParams['user'] : null;

        // invoke the rest of the middleware stack and your controller resulting
        // in a returned response object
        $response = $handler->handle($request);
        if($user) {
            $response = new DefaultResponse();
            $response->getBody()->write('<h1>Hello, '. $user.'</h1>');
        }

        // ...
        // do something with the response
        return $response;
    }
}
