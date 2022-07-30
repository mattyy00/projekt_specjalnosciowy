<?php

namespace App\Controller;

use App\Repository\JoboffersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfertypracyController extends AbstractController
{
    #[Route('/ofertypracy', name: 'app_ofertypracy')]
    public function index(JoboffersRepository $JoboffersRepository): Response
    {
        return $this->render('ofertypracy/index.html.twig', [
            'controller_name' => 'OfertypracyController',
            'job_offers_db' => $JoboffersRepository->findAll(),
        ]);
    }
}
