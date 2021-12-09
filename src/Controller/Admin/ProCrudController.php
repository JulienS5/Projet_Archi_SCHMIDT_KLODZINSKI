<?php

namespace App\Controller\Admin;

use App\Entity\Pro;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class ProCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Pro::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            yield TextField::new('Fullname'),
            yield EmailField::new('Mail'),
            yield DateTimeField::new('DateDeNaissance'),
            yield TextField::new('Telephone')
        ];
    }
}
