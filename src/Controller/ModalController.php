<?php

namespace App\Controller;

use App\Repository\ImpressumRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModalController extends AbstractController
{
    #[Route('/modal', name: 'app_modal')]
    public function index(ImpressumRepository $imp, ManagerRegistry $doctrine): Response
    {


            $impressum = $imp->findAll();

        return $this->render('modal/index.html.twig', [
            'impressum' => $impressum,
        ]);
    }
}
