<?php

namespace App\Controller;

use App\Repository\SocialRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SocialController extends AbstractController
{

    #[Route('/social', name: 'app_social')]
    public function social(SocialRepository $sr): Response
    {

        $socials = $sr->findAll();


        return $this->render('social/index.html.twig', [
            'socials' => $socials,
        ]);
    }


}
