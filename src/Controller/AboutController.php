<?php

namespace App\Controller;

use App\Repository\TexteRepository;
use Doctrine\ORM\Mapping\Id;
use App\Entity\Lebenslauf;
use App\Entity\Berufsweg;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
    public function index(
        TexteRepository $tr,
        ManagerRegistry $doctrine
    ): Response {
        $findID = $doctrine->getRepository(Berufsweg::class)->findby([
            'berufsweg' => 'Ausbildung',
        ]);

        $lebenslauf = $doctrine->getRepository(Lebenslauf::class)->findby(
            [
                'berufsweg' => $findID,
            ],
            [],
            2
            //1  offset
        );
        $lebenslauf_2 = $doctrine->getRepository(Lebenslauf::class)->findby(
            [
                'berufsweg' => $findID,
            ],
            [],
            2,
            2
        );

        /* dd($lebenslauf);
         die; */

        $information = $tr->findOneBy([
            'section' => 'about',
        ]);

        return $this->render('about/index.html.twig', [
            'section' => $information,
            'test' => $lebenslauf,
            'section2' => $lebenslauf_2
        ]);
    }
}
