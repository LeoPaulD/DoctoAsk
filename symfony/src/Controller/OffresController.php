<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Offre;

class OffresController extends AbstractController
{
    /**
     * @Route("/offres", name="offres")
     */
    public function offres()
    {

        $offres = new Offre();
        $offres = $this->getDoctrine()->getRepository(Offre::class)->findAll();
        return $this->render('offres/offres.html.twig',array('offres'=>$offres));
    }
}
