<?php

namespace Container89xPDi1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSkillsRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\SkillsRepository' shared autowired service.
     *
     * @return \App\Repository\SkillsRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\SkillsRepository'] = new \App\Repository\SkillsRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
