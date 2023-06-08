<?php

namespace ContainerNydMO19;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OHbZaGWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oHbZaGW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oHbZaGW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sr' => ['privates', 'App\\Repository\\SkillsRepository', 'getSkillsRepositoryService', true],
        ], [
            'sr' => 'App\\Repository\\SkillsRepository',
        ]);
    }
}
