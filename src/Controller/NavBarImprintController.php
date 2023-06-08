<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NavBarImprintController extends AbstractController
{
    #[Route('/nav/bar/imprint', name: 'app_nav_bar_imprint')]
    public function index(): Response
    {
        return $this->render('nav_bar_imprint/index.html.twig', [
            'controller_name' => 'NavBarImprintController',
        ]);
    }
}
