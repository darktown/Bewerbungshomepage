<?php

namespace ContainerRsoWyOW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCsvControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\CsvController' shared autowired service.
     *
     * @return \App\Controller\CsvController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\CsvController'] = $instance = new \App\Controller\CsvController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\CsvController', $container));

        return $instance;
    }
}