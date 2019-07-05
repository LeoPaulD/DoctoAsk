<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelpChatController extends AbstractController
{
    /**
     * @Route("/help/chat", name="help_chat")
     */
    public function helpChat()
    {
        return $this->render('help_chat/helpChat.html.twig', [
            'controller_name' => 'HelpChatController',
        ]);
    }
}
