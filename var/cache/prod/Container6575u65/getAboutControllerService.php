<?php

namespace Container6575u65;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAboutControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AboutController' shared autowired service.
     *
     * @return \App\Controller\AboutController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AboutController'] = $instance = new \App\Controller\AboutController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\AboutController', $container));

        return $instance;
    }
}
