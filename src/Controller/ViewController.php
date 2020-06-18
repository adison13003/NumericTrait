<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Taches;

class ViewController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        //  Méthode findAll qui permet de récupérer toutes les données 
        $taches = $this->getDoctrine()->getRepository(Taches::class)->findAll();

        return $this->render('view/index.html.twig', ['taches' => $taches]);
    }
}
