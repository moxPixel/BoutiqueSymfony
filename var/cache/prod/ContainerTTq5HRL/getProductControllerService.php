<?php

namespace ContainerTTq5HRL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ProductController' shared autowired service.
     *
     * @return \App\Controller\ProductController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ProductController'] = $instance = new \App\Controller\ProductController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\ProductController', $container));

        return $instance;
    }
}
