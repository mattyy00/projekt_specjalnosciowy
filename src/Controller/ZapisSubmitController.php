<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZapisSubmitController extends AbstractController
{
    #[Route('/zapis/submit', name: 'app_zapis_submit')]
    public function index(): Response
    {
        return $this->render('zapis_submit/index.html.twig', [
            'controller_name' => 'ZapisSubmitController',
        ]);
    }
}
