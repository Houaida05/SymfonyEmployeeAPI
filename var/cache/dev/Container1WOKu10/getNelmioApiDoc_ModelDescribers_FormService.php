<?php

namespace Container1WOKu10;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_ModelDescribers_FormService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.model_describers.form' shared service.
     *
     * @return \Nelmio\ApiDocBundle\ModelDescriber\FormModelDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/ModelDescriber/ModelDescriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Describer/ModelRegistryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Describer/ModelRegistryAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/ModelDescriber/FormModelDescriber.php';

        return $container->privates['nelmio_api_doc.model_describers.form'] = new \Nelmio\ApiDocBundle\ModelDescriber\FormModelDescriber(($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')), ($container->privates['annotations.reader'] ?? $container->getAnnotations_ReaderService()), [0 => 'json']);
    }
}
