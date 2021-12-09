<?php

namespace App\Controller\Admin;
use App\Entity\Panne;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/etudiant", name="admin")
     */
    public function index(): Response
    {
                $routeBuilder = $this->get(AdminUrlGenerator::class);
                $url = $routeBuilder->setController(UserCrudController::class)->generateUrl();

                return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Votre Espace');
    }

    public function configureMenuItems(): iterable
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(UserCrudController::class)->generateUrl();

        $routeBuilder1 = $this->get(AdminUrlGenerator::class);
        $url1 = $routeBuilder1->setController(DemandeCrudController::class)->generateUrl();

        $routeBuilder2 = $this->get(AdminUrlGenerator::class);
        $url2 = $routeBuilder2->setController(ProCrudController::class)->generateUrl();

        $routeBuilder3 = $this->get(AdminUrlGenerator::class);
        $url3 = $routeBuilder3->setController(ReservationCrudController::class)->generateUrl();

        $routeBuilder4 = $this->get(AdminUrlGenerator::class);
        $url4 = $routeBuilder4->setController(Demande2CrudController::class)->generateUrl();

        yield MenuItem::linktoRoute('Accueil', 'fas fa-home', 'homepage');
        yield MenuItem::linktoUrl('Demande de panne', 'fas fa-car', $url1);
        yield MenuItem::linktoUrl('Demande de panne2', 'fas fa-car', $url4);
        yield MenuItem::linktoUrl('Professionnels', 'fas fa-users', $url2);
        yield MenuItem::linktoUrl('Liste de rendez-vous', 'fas fa-map-marker-alt', $url3);

    }
}
