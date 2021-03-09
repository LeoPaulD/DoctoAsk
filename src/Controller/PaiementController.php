<?php

namespace App\Controller;

use App\Entity\User;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Offre;

class PaiementController extends AbstractController
{
    /**
     * @Route("/paiement/{id}", name="paiement")
     */
    public function paiement($id)
    {

        $user=$this->getUser();
        if ($user==NULL){
            return $this->redirectToRoute('fos_user_security_login');
        } else {

            $entityManager = $this->getDoctrine()->getManager();

            $offre = new Offre();
            $offre=$this->getDoctrine()->getRepository(Offre::class)->findOneBy(array('id' => $id));

            /*if ($offre != $user->getOffre()) {
              $offre = new Offre();
              $offre=$this->getDoctrine()->getRepository(Offre::class)->findOneBy(array('id' => $id));
            }*/

            $user->setOffre($entityManager->getReference(Offre::class, $id));

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->render('paiement/paiement.html.twig',array('offre'=>$offre));
        }
    }
}
