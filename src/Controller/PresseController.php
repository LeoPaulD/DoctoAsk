<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PresseController extends AbstractController
{
    /**
     * @Route("/presse", name="presse")
     */
    public function presse()
    {
        return $this->render('presse/presse.html.twig');
    }
}
