<?php
namespace App\Notification;

use App\Entity\Contact;
use Twig\Environment;

Class ContactNotification {
    /**
     * @var \Swift_Mailer
     */ 
    private $mailer;

    /**
     * @var Environnement
     */
    private $renderer;
    
    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {

        $this ->mailer =$mailer;
        $this ->renderer =$renderer;
   }
    public function notify(Contact $contact){
        $message = (new \Swift_Message('Contact DoCtoAsk'))
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setReplyTo($contact->getMail())
            ->setBody(
                $this->renderer ->render(
                    
                    'email/contact.html.twig',
                    array('contact' => $contact)
                ),
                'text/html');

                $this->mailer
                ->send($message);
    }
}

