<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CguController extends AbstractController
{
    /**
     * @Route("/cgu", name="cgu")
     */
    public function cgu()
    {
        return $this->render('cgu/cgu.html.twig');
    }
}
