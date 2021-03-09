<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecuriteController extends AbstractController
{
    /**
     * @Route("/securite", name="securite")
     */
    public function securite()
    {
        return $this->render('securite/securite.html.twig', [
            'controller_name' => 'SecuriteController',
        ]);
    }
}
