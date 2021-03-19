<?php

namespace App\Controller;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/messagecontact", name="messagecontact")
     */
    public function index( Request $request, \Swift_Mailer $mailer)
    { 
        $form = $this->createForm(ContactType::class);
        
        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView()
        ]);
    }
}
