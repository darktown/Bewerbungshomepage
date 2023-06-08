<?php

namespace Container6575u65;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Listener_Remove_ProductsService extends App_KernelProdContainer
{
    /*
     * Gets the private 'vich_uploader.listener.remove.products' shared service.
     *
     * @return \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['vich_uploader.upload_handler'] ?? $container->load('getVichUploader_UploadHandlerService'));

        if (isset($container->privates['vich_uploader.listener.remove.products'])) {
            return $container->privates['vich_uploader.listener.remove.products'];
        }

        return $container->privates['vich_uploader.listener.remove.products'] = new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('products', ($container->privates['vich_uploader.adapter.orm'] ?? ($container->privates['vich_uploader.adapter.orm'] = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter())), ($container->privates['vich_uploader.metadata_reader'] ?? $container->getVichUploader_MetadataReaderService()), $a);
    }
}
