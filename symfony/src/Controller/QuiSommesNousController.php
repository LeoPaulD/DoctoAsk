<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QuiSommesNousController extends AbstractController
{
    /**
     * @Route("/quisommesnous", name="qui_sommes_nous")
     */
    public function qui_sommes_nous()
    {
        return $this->render('qui_sommes_nous/quisommesnous.html.twig');
    }
}
