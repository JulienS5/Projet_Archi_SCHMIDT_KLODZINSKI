<?php

namespace App\Controller\Pros;

use App\Entity\Demande;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DemandeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Demande::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return[
            
            yield TextField::new('Sujet'),
            yield TextField::new('Type'),
            yield ArrayField::new('Piece'),
            yield TextField::new('Description'),
            yield EmailField::new('Mail_Etudiant'),
            yield BooleanField::new('estPris')
        ];
    }
}
