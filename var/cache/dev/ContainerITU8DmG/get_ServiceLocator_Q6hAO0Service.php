<?php

namespace ContainerITU8DmG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q6hAO0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q6hA_O0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q6hA_O0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored..service_locator.q6hA_O0.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.q6hA_O0": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
