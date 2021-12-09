<?php

namespace App\Controller\Pros;

use App\Entity\ReservationPro;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ReservationProCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ReservationPro::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            yield DateTimeField::new('Date'),
            yield TextField::new('Lieu'),
            yield TextField::new('Nom_Etudiant')
        ];
    }
}
