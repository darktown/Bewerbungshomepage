<?php

namespace Container6575u65;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHeadInfoCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\HeadInfoCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\HeadInfoCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\HeadInfoCrudController'] = $instance = new \App\Controller\Admin\HeadInfoCrudController();

        $instance->setContainer(($container->privates['.service_locator.UIrHhwh'] ?? $container->load('get_ServiceLocator_UIrHhwhService'))->withContext('App\\Controller\\Admin\\HeadInfoCrudController', $container));

        return $instance;
    }
}
