<?php

namespace App\Controller\Admin;

use App\Entity\Csv;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;


class CsvCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Csv::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('datebegin'),
            TextField::new('dateend'),
            TextField::new('firma'),
            TextEditorField::new('beschreibung')->setFormType(CKEditorType::class)->addCssClass('field-ck-editor'),
            AssociationField::new('rel')
                ->setRequired(true)
                ->autocomplete(),
            BooleanField::new('enable'),

        ];
    }
}
