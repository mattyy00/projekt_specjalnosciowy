<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactSubmitController extends AbstractController
{
    #[Route('/contact/submit', name: 'app_contact_submit')]
    public function index(): Response
    {
        return $this->render('contact_submit/index.html.twig', [
            'controller_name' => 'ContactSubmitController',
        ]);
    }
}
