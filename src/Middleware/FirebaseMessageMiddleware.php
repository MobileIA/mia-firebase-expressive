<?php

namespace Mobileia\Expressive\Firebase\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Description of FirebaseMessageMiddleware
 *
 * @author matiascamiletti
 */
class FirebaseMessageMiddleware implements MiddlewareInterface
{
    /**
     * @var \MIAFirebase\Messaging
     */
    private $service;

    public function __construct(\MIAFirebase\Messaging $firebase) {
        $this->service = $firebase;
    }
    
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler) : ResponseInterface
    {
        // Enviar servicio como atributo
        return $handler->handle($request->withAttribute('FirebaseMessage', $this->service));
    }
}