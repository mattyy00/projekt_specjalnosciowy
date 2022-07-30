<?php

namespace App\Controller;

use App\Entity\Course;
use App\Form\SignupFormType;
use App\Repository\CourseRepository;
use App\Repository\JoboffersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class StronaglownaController extends AbstractController
{
    #[Route('/stronaglowna', name: 'app_stronaglowna')]
    public function index(CourseRepository $courserepository): Response
    {




        return $this->render('stronaglowna/index.html.twig', [
            'controller_name' => 'StronaglownaController',
            'course_db' => $courserepository->findAll(),
        ]);
    }
}

