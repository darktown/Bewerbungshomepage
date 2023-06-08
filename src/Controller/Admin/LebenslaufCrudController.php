<?php

namespace App\Controller\Admin;

use App\Entity\Lebenslauf;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LebenslaufCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Lebenslauf::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('datebegin'),
            TextField::new('dateend'),
            TextField::new('firma'),
            TextField::new('info'),
            AssociationField::new('berufsweg')
                ->setRequired(true)
                ->autocomplete()
            //TextEditorField::new('description'),
        ];
    }
}
