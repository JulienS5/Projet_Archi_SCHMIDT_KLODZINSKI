<?php

namespace App\Controller\Pros;

use App\Controller\Admin\DemandeCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProDashboardController extends AbstractDashboardController
{
    /**
     * @Route("/pro_dash", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder1 = $this->get(AdminUrlGenerator::class);
        $url1 = $routeBuilder1->setController(DemandeCrudController::class)->generateUrl();

        return $this->redirect($url1);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Bienvenue sur votre interface !');
    }

    public function configureMenuItems(): iterable
    {
        $routeBuilder1 = $this->get(AdminUrlGenerator::class);
        $url1 = $routeBuilder1->setController(DemandeCrudController::class)->generateUrl();

        $routeBuilder2 = $this->get(AdminUrlGenerator::class);
        $url2 = $routeBuilder2->setController(ReservationProCrudController::class)->generateUrl();

        yield MenuItem::linktoUrl('Liste de demande de panne', 'fas fa-car', $url1);
        yield MenuItem::linktoUrl('Liste de rendez-vous', 'fas fa-map-marker-alt', $url2);
    }
}
