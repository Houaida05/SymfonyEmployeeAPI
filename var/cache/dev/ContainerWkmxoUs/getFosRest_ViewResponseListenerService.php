<?php

namespace ContainerWkmxoUs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosRest_ViewResponseListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_rest.view_response_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\ViewResponseListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/EventListener/ViewResponseListener.php';

        return $container->privates['fos_rest.view_response_listener'] = new \FOS\RestBundle\EventListener\ViewResponseListener(($container->services['fos_rest.view_handler'] ?? $container->load('getFosRest_ViewHandlerService')), false);
    }
}
