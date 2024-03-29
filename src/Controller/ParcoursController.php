<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ParcoursController extends AbstractController
{
    /**
     * @Route("/parcours-realisations", name="parcours")
     */
    public function index()
    {
        return $this->render('parcours/index.html.twig', [
            'controller_name' => 'ParcoursController',
        ]);
    }
}
