<?php

namespace App\Controller;

use App\Entity\Berufsweg;
use App\Entity\Csv;
use App\Entity\Lebenslauf;
use App\Repository\CsvRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CsvController extends AbstractController
{
    #[Route('/csv', name: 'app_csv')]
    public function index(ManagerRegistry $doctrine): Response
    {


        $findID = $doctrine->getRepository(Berufsweg::class)->findby([
            'berufsweg' => 'Beruf',
        ]);

        $csv = $doctrine->getRepository(Lebenslauf::class)->findby(
            [
                'berufsweg' => $findID,
            ],
        );
        /* $csv2 = $doctrine->getRepository(Lebenslauf::class)->findby(
            [
                'berufsweg' => $findID,
            ],
            [],
            2,
            2
        ); */


        return $this->render('csv/index.html.twig', [
            'csv' => $csv,
            //'csv2' => $csv2,
        ]);
    }
}
