<?php

namespace App\Controller;

use App\Entity\Signup;
use App\Form\SignupFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;

class ZapisController extends AbstractController
{
    #[Route('/zapis', name: 'app_zapis')]
    /*public function index(): Response
    {
        return $this->render('form/index.html.twig', [
            'controller_name' => 'ZapisController',
        ]);


    }*/

    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $signup = new SignUp();
        $form = $this->createForm(SignupFormType::class,$signup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $entityManager->persist($signup);
            $entityManager->flush();

            return $this->redirectToRoute('app_zapis_submit', [], Response::HTTP_SEE_OTHER);
        }


        return $this->renderForm('zapis/index.html.twig', [
            'form' => $form
        ]);
    }

}
