<?php


namespace Mobileia\Expressive\Firebase\Factory;

use Psr\Container\ContainerInterface;

/**
 * Description of FirebaseMessageFactory
 *
 * @author matiascamiletti
 */
class FirebaseMessageFactory
{
    public function __invoke(ContainerInterface $container) : \Mobileia\Expressive\Firebase\Middleware\FirebaseMessageMiddleware
    {
        // Creamos servicio
        $service   = $container->get(\MIAFirebase\Messaging::class);
        // Generamos el handler
        return new \Mobileia\Expressive\Firebase\Middleware\FirebaseMessageMiddleware($service);
    }
}