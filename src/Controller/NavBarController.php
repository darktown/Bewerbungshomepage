<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NavBarController extends AbstractController
{
    #[Route('/nav/bar', name: 'app_nav_bar')]
    public function index(ManagerRegistry $doctrine): Response
    {
        
        return $this->render('nav_bar/index.html.twig', [
            'controller_name' => 'NavBarController',
        ]);
    }
}
