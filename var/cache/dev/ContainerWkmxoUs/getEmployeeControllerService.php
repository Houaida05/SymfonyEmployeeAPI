<?php

namespace ContainerWkmxoUs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmployeeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EmployeeController' shared autowired service.
     *
     * @return \App\Controller\EmployeeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/AbstractFOSRestController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EmployeeController.php';

        $container->services['App\\Controller\\EmployeeController'] = $instance = new \App\Controller\EmployeeController(($container->services['jms_serializer'] ?? $container->load('getJmsSerializerService')), ($container->privates['App\\Repository\\EmployeeRepository'] ?? $container->load('getEmployeeRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['.container.private.validator'] ?? $container->get_Container_Private_ValidatorService()));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', '.container.private.form.factory', 'get_Container_Private_Form_FactoryService', true],
            'fos_rest.view_handler' => ['services', 'fos_rest.view_handler', 'getFosRest_ViewHandlerService', true],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'session' => ['privates', '.session.deprecated', 'get_Session_DeprecatedService', true],
            'twig' => ['services', '.container.private.twig', 'get_Container_Private_TwigService', false],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'fos_rest.view_handler' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'session' => '.session.deprecated',
            'twig' => '?',
        ]))->withContext('App\\Controller\\EmployeeController', $container));

        return $instance;
    }
}
