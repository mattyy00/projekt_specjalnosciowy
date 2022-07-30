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

            return new Response('Dodano cię do bazy danych kursu' . $signup->getId() . '. Udało się');
        }


        return $this->renderForm('zapis/index.html.twig', [
            'form' => $form
        ]);
    }


    /*
    public function testAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $task = new enquiry();
        $form = $this->createForm(new QuestionType(), $task);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em->persist($task);
            $em->flush();
        }
        return $this->render('index.html.twig', array('form'=>$form->createView()));

    }
    */
    /*
    public function createAction(Request $request)
    {
        $product = 'src\Entity\Signup';
        $form = $this->createForm(SignupFormType::class, $product);

        $form->handleRequest($request);

        if($form->isValid())
        {
            $em= $this->getDoctrine()->getManager();
            //Save into database code should go here...
        }
    }
    */
    /*
    public function new(Request $request)
    {





        $newsignup= new Newsignup();

        $form = $this->createForm(SignupFormType::class,$newsignup);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($newsignup);
            $entityManager->flush();

            return $this->redirectToRoute('stronaglowna/index.html.twig');
        }

        return new Response($twig->render('zapis/index.html.twig',['sub_form' => $form->createView()]));



    }*/
}
