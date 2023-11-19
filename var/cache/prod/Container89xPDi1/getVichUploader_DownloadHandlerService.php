<?php

namespace Container89xPDi1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_DownloadHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'vich_uploader.download_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\DownloadHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['vich_uploader.download_handler'] = new \Vich\UploaderBundle\Handler\DownloadHandler(($container->privates['vich_uploader.property_mapping_factory'] ?? $container->getVichUploader_PropertyMappingFactoryService()), ($container->privates['vich_uploader.storage.file_system'] ?? $container->getVichUploader_Storage_FileSystemService()));
    }
}
