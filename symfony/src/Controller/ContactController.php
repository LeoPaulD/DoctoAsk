<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Form\ContactType;
use App\Notification\ContactNotification;



class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function mail(Contact $contact = null, Request $request, ObjectManager $manager, ContactNotification $notification)
    {
        if(!$contact) {
            $contact = new Contact();
        }
        $form = $this->createForm(ContactType::class, $contact);
        $form -> handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            $manager->persist($contact);
            $manager->flush();
            $notification->notify($contact);
            $this->addFlash("success", "This is a success message");     
            return $this->redirectToRoute('contact');
        };
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'ContactController',
            'formContact' => $form->createView(),
        ]);
        
        
    }
}
