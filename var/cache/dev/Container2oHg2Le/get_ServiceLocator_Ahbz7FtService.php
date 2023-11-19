<?php

namespace Container2oHg2Le;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ahbz7FtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ahbz7Ft' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ahbz7Ft'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'impressum' => ['privates', 'App\\Repository\\ImpressumRepository', 'getImpressumRepositoryService', true],
        ], [
            'impressum' => 'App\\Repository\\ImpressumRepository',
        ]);
    }
}