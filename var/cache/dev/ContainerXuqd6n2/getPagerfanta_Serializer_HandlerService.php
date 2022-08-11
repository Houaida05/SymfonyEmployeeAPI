<?php

namespace ContainerXuqd6n2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPagerfanta_Serializer_HandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pagerfanta.serializer.handler' shared service.
     *
     * @return \BabDev\PagerfantaBundle\Serializer\Handler\PagerfantaHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/babdev/pagerfanta-bundle/src/Serializer/Handler/PagerfantaHandler.php';

        return $container->privates['pagerfanta.serializer.handler'] = new \BabDev\PagerfantaBundle\Serializer\Handler\PagerfantaHandler();
    }
}
