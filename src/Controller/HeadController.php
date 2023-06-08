<?php

namespace App\Controller;

use App\Repository\HeadInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HeadController extends AbstractController
{
    #[Route('/head', name: 'app_head')]
    public function headerinfo(HeadInfoRepository $hi): Response
    {

        $head = $hi->findBy(['enable'=>'1']);

        return $this->render('head/index.html.twig', [
            'headinfo' => $head,
        ]);
    }
}
