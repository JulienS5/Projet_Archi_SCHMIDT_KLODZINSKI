<?php
namespace App\Controller;

use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoreController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function homepage(EventRepository $eventRepository): Response
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/", name="firstPage")
     */
    public function firstPage(EventRepository $eventRepository): Response
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/etudiante", name="homeEtu")
     */
    public function homeEtu(EventRepository $eventRepository): Response
    {
        return $this->render('etudiant/index.html.twig');
    }

    /**
     * @Route("/professionnel", name="homePro")
     */
    public function homePro(EventRepository $eventRepository): Response
    {
        return $this->render('professionnel/index.html.twig');
    }

    /**
     * @Route("/situation", name="situation")
     */
    public function situation(EventRepository $eventRepository): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'GoogleController',
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(): Response
    {
        return $this->redirectToRoute('homepage');
    }

    public function about()
    {
        return new Response("<h1>About Symfony Ticketing App</h1>");
    }
}
