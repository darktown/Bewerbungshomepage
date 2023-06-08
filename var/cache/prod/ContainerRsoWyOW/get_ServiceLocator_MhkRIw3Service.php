<?php

namespace ContainerRsoWyOW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MhkRIw3Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.mhkRIw3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mhkRIw3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hi' => ['privates', 'App\\Repository\\HeadInfoRepository', 'getHeadInfoRepositoryService', true],
        ], [
            'hi' => 'App\\Repository\\HeadInfoRepository',
        ]);
    }
}