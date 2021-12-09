<?php

namespace App\Controller\Admin;

use App\Entity\Pro;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Pro::class;
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
