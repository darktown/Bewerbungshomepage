<?php

namespace Container6575u65;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLebenslaufControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\LebenslaufController' shared autowired service.
     *
     * @return \App\Controller\LebenslaufController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\LebenslaufController'] = $instance = new \App\Controller\LebenslaufController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\LebenslaufController', $container));

        return $instance;
    }
}
