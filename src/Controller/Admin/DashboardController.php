<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use App\Entity\Course;
use App\Entity\CourseBenefits;
use App\Entity\Joboffers;
use App\Entity\Signup;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    public function __construct(
        private AdminUrlGenerator $adminUrlGenerator
    ){
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        //$url = $this->adminUrlGenerator
        //    ->setController(Contact::class)
        //   ->generateUrl();

        //return $this->redirect($url);

        //return parent::index();
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(ContactCrudController::class)->generateUrl());

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Projekt Spec');
    }

    public function configureMenuItems(): iterable
    {
       // yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Contact', 'fas fa-list', Contact::class);
        yield MenuItem::linkToCrud('Course', 'fas fa-list', Course::class);
        yield MenuItem::linkToCrud('CourseBenefits', 'fas fa-list', CourseBenefits::class);
        yield MenuItem::linkToCrud('Joboffers', 'fas fa-list', Joboffers::class);
        yield MenuItem::linkToCrud('Signup', 'fas fa-list', Signup::class);
    }
}
