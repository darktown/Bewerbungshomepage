<?php

namespace Container89xPDi1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ScITZfService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.scIT_Zf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.scIT_Zf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sr' => ['privates', 'App\\Repository\\SocialRepository', 'getSocialRepositoryService', true],
        ], [
            'sr' => 'App\\Repository\\SocialRepository',
        ]);
    }
}
