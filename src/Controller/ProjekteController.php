<?php

namespace App\Controller;

use App\Repository\ProjekteRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjekteController extends AbstractController
{
    #[Route('/projekte', name: 'app_projekte')]
    public function index(ProjekteRepository $pr, ManagerRegistry $doctrine): Response
    {

        $projects = $pr->findBy(['enable' => '1']);

        //dump($projects);

        return $this->render('projekte/index.html.twig', [
            'pro' => $projects,
        ]);
    }
}
