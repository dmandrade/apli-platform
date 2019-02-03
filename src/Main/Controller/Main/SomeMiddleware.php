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


use Apli\Http\Message\ServerRequest;
use Apli\Http\Response\DefaultResponse;
use Apli\Http\Server\Middleware;
use Apli\Http\Server\RequestHandler;

class SomeMiddleware implements Middleware
{
    /**
     * @param ServerRequest  $request
     * @param RequestHandler $handler
     * @return ResponseInterface
     */
    public function process(ServerRequest $request, RequestHandler $handler)
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
