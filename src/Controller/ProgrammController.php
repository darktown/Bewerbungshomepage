<?php

namespace App\Controller;

use App\Repository\ProgrammRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgrammController extends AbstractController
{
    #[Route('/programm', name: 'app_programm')]
    public function index(ProgrammRepository $rp): Response
    {

        $prog = $rp->findBy(['enable' => '1']);

        return $this->render('programm/index.html.twig', [
            'programm' => $prog,
        ]);
    }
}
