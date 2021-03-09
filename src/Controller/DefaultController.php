<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {

        

        $repository = $this->getDoctrine()->getRepository(User::class);
        $docteurs = $repository->findAll();
        return $this->render('default/index.html.twig', [
            'docteurs' => $docteurs,
        ]);
    }
}
