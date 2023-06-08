<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjekteController extends AbstractController
{
    #[Route('/projekte', name: 'app_projekte')]
    public function index(): Response
    {
        return $this->render('projekte/index.html.twig', [
            'controller_name' => 'ProjekteController',
        ]);
    }
}
