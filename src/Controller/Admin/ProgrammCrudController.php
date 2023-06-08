<?php

namespace App\Controller\Admin;

use App\Entity\Programm;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProgrammCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Programm::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            ImageField::new('image')->setBasePath('images/prg/')
                ->setUploadDir('public/images/prg/')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            BooleanField::new('enable'),

        ];
    }
}
