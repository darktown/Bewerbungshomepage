<?php

namespace ContainerRsoWyOW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImpressumRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ImpressumRepository' shared autowired service.
     *
     * @return \App\Repository\ImpressumRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ImpressumRepository'] = new \App\Repository\ImpressumRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}