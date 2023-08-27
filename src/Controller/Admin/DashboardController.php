<?php

namespace App\Controller\Admin;

use App\Entity\Berufsweg;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use App\Entity\HeadInfo;
use App\Entity\Impressum;
use App\Entity\Programm;
use App\Entity\Skills;
use App\Entity\Social;
use App\Entity\Csv;
use App\Entity\Projekte;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use Symfony\Component\Security\Core\User\UserInterface;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(LebenslaufCrudController::class)->generateUrl());
    }


    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Rene');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Head-Texte', 'far fa-address-card', HeadInfo::class);
        yield MenuItem::linkToCrud('Berufsweg', 'far fa-address-card', Berufsweg::class);
        yield MenuItem::linkToCrud('Csv', 'far fa-address-card', Csv::class);
        yield MenuItem::linkToCrud('Social', 'far fa-address-card', Social::class);
        yield MenuItem::linkToCrud('Skills', 'far fa-address-card', Skills::class);
        yield MenuItem::linkToCrud('Impressum', 'far fa-address-card', Impressum::class);
        yield MenuItem::linkToCrud('Programme', 'far fa-address-card', Programm::class);
        yield MenuItem::linkToCrud('Projekte', 'far fa-address-card', Projekte::class);
        //yield MenuItem::linkToCrud('The Label', 'fas fa-list', BerufswegCrudController::class);
    }
}
