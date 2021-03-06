<?php

declare(strict_types=1);

namespace Mobileia\Expressive\Firebase;

/**
 * The configuration provider for the App module
 *
 * @see https://docs.zendframework.com/zend-component-installer/
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     *
     */
    public function __invoke() : array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    /**
     * Returns the container dependencies
     */
    public function getDependencies() : array
    {
        return [
            'invokables' => [
                
            ],
            'factories'  => [
                \MIAFirebase\Messaging::class => MessagingFactory::class,
                \Mobileia\Expressive\Firebase\Middleware\FirebaseMessageMiddleware::class => \Mobileia\Expressive\Firebase\Factory\FirebaseMessageFactory::class,
            ],
        ];
    }
}
