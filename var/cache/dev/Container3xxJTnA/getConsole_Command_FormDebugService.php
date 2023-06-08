<?php

namespace Container3xxJTnA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Command/DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 2 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type', 3 => 'FOS\\CKEditorBundle\\Form\\Type', 4 => '', 5 => 'Vich\\UploaderBundle\\Form\\Type'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 3 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 4 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 5 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType', 6 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType', 7 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType', 8 => 'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType', 9 => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType', 10 => 'Vich\\UploaderBundle\\Form\\Type\\VichFileType', 11 => 'Vich\\UploaderBundle\\Form\\Type\\VichImageType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 6 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension', 7 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension'], [0 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? ($container->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
