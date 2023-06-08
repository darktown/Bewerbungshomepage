<?php

namespace App\Controller;

use App\Entity\Berufsweg;
use App\Entity\Lebenslauf;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LebenslaufController extends AbstractController
{
    #[Route('/lebenslauf', name: 'app_lebenslauf')]
    public function index(ManagerRegistry $doctrine): Response
    {

        (array)$test = $doctrine->getRepository(Lebenslauf::class)->findBy([
            'berufsweg' => '1'
        ]);
        //dd($test);


        return $this->render('lebenslauf/index.html.twig', [
            'controller_name' => 'LebenslaufController',
        ]);
    }
}
