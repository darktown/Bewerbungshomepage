<?php

namespace Container6575u65;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNavBarImprintControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\NavBarImprintController' shared autowired service.
     *
     * @return \App\Controller\NavBarImprintController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\NavBarImprintController'] = $instance = new \App\Controller\NavBarImprintController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\NavBarImprintController', $container));

        return $instance;
    }
}