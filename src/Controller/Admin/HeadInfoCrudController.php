<?php

namespace App\Controller\Admin;

use App\Entity\HeadInfo;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class HeadInfoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HeadInfo::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig');
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            //TextField::new('title'),
            TextEditorField::new('text')->setFormType(CKEditorType::class)->addCssClass('field-ck-editor'),
            TextField::new('link'),
            TextField::new('linktext'),
            BooleanField::new('enable'),
            ImageField::new('image_name')->setBasePath('images/')
                ->setUploadDir('public/images/')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
        ];
    }
}
