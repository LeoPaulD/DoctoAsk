<?php

namespace App\Controller;

use App\Entity\Infos;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InfosController extends AbstractController
{
    /**
     * @Route("/infos/{id}", name="infos")
     */
    public function index($id)
    {
        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No user found for id '.$id
            );
        }

        $infos = $this->getDoctrine()
            ->getRepository(Infos::class)
            ->find($id);

        return $this->render('infos/infos.html.twig', array(
            'user' => $user, 'infos' => $infos
          ));
    }
}
