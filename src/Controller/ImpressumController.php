<?php

namespace App\Controller;

use App\Repository\ImpressumRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImpressumController extends AbstractController
{
    #[Route('/impressum', name: 'impressum')]
    public function index(ImpressumRepository $impressum): Response
    {


        $impressum = $impressum->findAll();

        return $this->render('impressum/index.html.twig', [
            'impressum' => $impressum,
        ]);
    }
}
