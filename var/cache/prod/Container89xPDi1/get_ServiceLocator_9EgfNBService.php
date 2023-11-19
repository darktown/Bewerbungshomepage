<?php

namespace Container89xPDi1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9EgfNBService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.9_EgfNB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9_EgfNB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'pr' => ['privates', 'App\\Repository\\ProjekteRepository', 'getProjekteRepositoryService', true],
        ], [
            'doctrine' => '?',
            'pr' => 'App\\Repository\\ProjekteRepository',
        ]);
    }
}
