<?php

namespace App\Controller;

use App\Repository\CoursRepository;
use App\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FrontEndController extends AbstractController
{

    /**
     * @Route("/", name="liste-cours")
     */
    public function listeCours(CoursRepository $repository): Response
    {

        $cours = $repository->findAll();

        return $this->render('front_end/liste-cours.html.twig', [
            'lesCours' => $cours,
        ]);
    }

    /**
     * @Route("/cours/{idCours}/page/{numPage}", name="page")
     */
    public function page(PageRepository $repository, $idCours, $numPage): Response
    {
        $page = $repository->rechercherPage($idCours, $numPage);

        return $this->render('front_end/formation.html.twig', [
            'page' => $page,
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('front_end/contact.html.twig');
    }

}
