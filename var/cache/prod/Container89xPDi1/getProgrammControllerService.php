<?php

namespace Container89xPDi1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProgrammControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ProgrammController' shared autowired service.
     *
     * @return \App\Controller\ProgrammController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ProgrammController'] = $instance = new \App\Controller\ProgrammController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\ProgrammController', $container));

        return $instance;
    }
}
