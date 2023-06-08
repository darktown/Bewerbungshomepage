<?php

namespace App\Controller\Admin;

use App\Entity\Berufsweg;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BerufswegCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Berufsweg::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
