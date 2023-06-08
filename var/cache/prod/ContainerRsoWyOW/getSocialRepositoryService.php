<?php

namespace ContainerRsoWyOW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSocialRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\SocialRepository' shared autowired service.
     *
     * @return \App\Repository\SocialRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\SocialRepository'] = new \App\Repository\SocialRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
