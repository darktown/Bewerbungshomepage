<?php

namespace Container6575u65;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProgrammRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ProgrammRepository' shared autowired service.
     *
     * @return \App\Repository\ProgrammRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ProgrammRepository'] = new \App\Repository\ProgrammRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}