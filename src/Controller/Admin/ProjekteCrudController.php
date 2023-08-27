<?php

namespace App\Controller\Admin;

use App\Entity\Projekte;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class ProjekteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Projekte::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig');
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextEditorField::new('beschreibung')->setFormType(CKEditorType::class)->addCssClass('field-ck-editor'),
            TextField::new('link'),
            ImageField::new('image')->setBasePath('images/prg/')
                ->setUploadDir('public/images/prg/')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            BooleanField::new('enable'),

        ];
    }
    
}
