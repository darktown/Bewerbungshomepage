<?php

namespace App\Controller;

use App\Repository\SkillsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkillsController extends AbstractController
{
    #[Route('/skills', name: 'app_skills')]
    public function index(SkillsRepository $sr): Response
    {

        $skills = $sr->findBy(['enable'=>'1']);

        //$skills = $sr->findb();

        return $this->render('skills/index.html.twig', [
            'skills' => $skills,
        ]);
    }
}
