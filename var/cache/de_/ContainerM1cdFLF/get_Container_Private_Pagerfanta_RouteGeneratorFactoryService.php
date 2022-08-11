<?php

namespace ContainerM1cdFLF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Pagerfanta_RouteGeneratorFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public '.container.private.pagerfanta.route_generator_factory' shared service.
     *
     * @return \BabDev\PagerfantaBundle\RouteGenerator\RequestAwareRouteGeneratorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pagerfanta/pagerfanta/lib/Core/RouteGenerator/RouteGeneratorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/babdev/pagerfanta-bundle/src/RouteGenerator/RequestAwareRouteGeneratorFactory.php';

        return $container->services['.container.private.pagerfanta.route_generator_factory'] = new \BabDev\PagerfantaBundle\RouteGenerator\RequestAwareRouteGeneratorFactory(($container->services['router'] ?? $container->getRouterService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')));
    }
}
