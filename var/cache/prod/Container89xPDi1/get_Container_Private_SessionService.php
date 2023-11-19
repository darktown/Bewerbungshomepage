<?php

namespace Container89xPDi1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_SessionService extends App_KernelProdContainer
{
    /*
     * Gets the public '.container.private.session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['session.factory'] ?? $container->load('getSession_FactoryService'));

        if (isset($container->services['.container.private.session'])) {
            return $container->services['.container.private.session'];
        }

        return $container->services['.container.private.session'] = $a->createSession();
    }
}
