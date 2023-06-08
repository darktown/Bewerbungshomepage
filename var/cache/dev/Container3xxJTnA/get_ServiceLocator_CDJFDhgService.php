<?php

namespace Container3xxJTnA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CDJFDhgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CDJFDhg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CDJFDhg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hi' => ['privates', 'App\\Repository\\HeadInfoRepository', 'getHeadInfoRepositoryService', true],
        ], [
            'hi' => 'App\\Repository\\HeadInfoRepository',
        ]);
    }
}
