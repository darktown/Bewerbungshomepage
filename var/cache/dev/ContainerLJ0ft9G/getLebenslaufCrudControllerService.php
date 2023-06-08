<?php

namespace ContainerLJ0ft9G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLebenslaufCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\LebenslaufCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\LebenslaufCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/LebenslaufCrudController.php';

        $container->services['App\\Controller\\Admin\\LebenslaufCrudController'] = $instance = new \App\Controller\Admin\LebenslaufCrudController();

        $instance->setContainer(($container->privates['.service_locator.ipvtXDO'] ?? $container->load('get_ServiceLocator_IpvtXDOService'))->withContext('App\\Controller\\Admin\\LebenslaufCrudController', $container));

        return $instance;
    }
}
