<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FaqController extends AbstractController
{
    /**
     * @Route("/faq", name="faq")
     */
    public function faq()
    {
        return $this->render('faq/faq.html.twig', [
            'controller_name' => 'FaqController',
        ]);
    }
}
