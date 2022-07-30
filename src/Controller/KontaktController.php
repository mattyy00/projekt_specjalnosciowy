<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KontaktController extends AbstractController
{
    #[Route('/kontakt', name: 'app_kontakt')]

    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $newContact = new Contact();
        $form = $this->createForm(ContactFormType::class,$newContact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $entityManager->persist($newContact);
            $entityManager->flush();


        }


        return $this->renderForm('kontakt/index.html.twig', [
            'form' => $form
        ]);
    }
}
