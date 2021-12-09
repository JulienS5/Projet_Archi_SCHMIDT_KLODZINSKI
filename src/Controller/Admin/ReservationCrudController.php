<?php

namespace App\Controller\Admin;

use App\Entity\Demande;
use App\Entity\Reservation;
use App\Repository\DemandeRepository;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ReservationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reservation::class;
    }

    public function configureFields(string $pageName): iterable
    {
            return [
                yield DateTimeField::new('Date'),
                yield TextField::new('Lieu'),
                yield TextField::new('Nom_Du_Professionnel'),
            ];
    }
}
