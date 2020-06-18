<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/connect", name="connect")
     */
    public function index()
    {
        return $this->render('security/connect.html.twig');
    }
}
