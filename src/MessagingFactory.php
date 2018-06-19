<?php

namespace Mobileia\Expressive\Firebase;

use Psr\Container\ContainerInterface;

/**
 * Description of MessagingFactory
 *
 * @author matiascamiletti
 */
class MessagingFactory 
{
    public function __invoke(ContainerInterface $container) : \MIAFirebase\Messaging
    {
        // Obtenemos configuración
        $config = $container->get('config');
        // Creamos variable que almacenara el ApiKey
        $apiKey = '';
        // Verificamos que exista la key
        if(array_key_exists('mia_firebase', $config) && array_key_exists('api_key', $config['mia_firebase'])){
            // Iniciamos un array, ya que no se encontro una configuración
            $apiKey = $config['mia_firebase']['api_key'];
        }
        // creamos libreria
        return new \MIAFirebase\Messaging($apiKey);
    }
}