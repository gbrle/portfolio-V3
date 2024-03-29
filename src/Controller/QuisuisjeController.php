<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QuisuisjeController extends AbstractController
{
    /**
     * @Route("/qui-suis-je", name="quisuisje")
     */
    public function index()
    {
        return $this->render('quisuisje/index.html.twig', [
            'controller_name' => 'QuisuisjeController',
        ]);
    }
}
