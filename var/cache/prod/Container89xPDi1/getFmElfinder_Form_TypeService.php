<?php

namespace Container89xPDi1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFmElfinder_Form_TypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'fm_elfinder.form.type' shared service.
     *
     * @return \FM\ElfinderBundle\Form\Type\ElFinderType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['fm_elfinder.form.type'] = new \FM\ElfinderBundle\Form\Type\ElFinderType();
    }
}
