<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ConnexionType;
use App\Entity\Users;
use App\Entity\Connexion;
use Symfony\Component\HttpFoundation\Request;

class ConnexionController extends AbstractController
{
    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(Request $request)
    {   
        $form = $this->createForm(ConnexionType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $email=$data['email'];
            $pwd=$data['pwd'];

            $user=new Users();
            $user=$this->getDoctrine()->getRepository(Users::class)->findOneBy(array('mail' => $email));

            if($user==null){
                //var_dump($user);
                echo("E-mail et/ou mot de passe incorrects");
            } else {
            
                $idMedecin=$user->getId();

                $connexion=new Connexion();
                $connexion=$this->getDoctrine()->getRepository(Connexion::class)->findOneBy(array('idMedecin' => $idMedecin));
                $pwdHash=$connexion->getPassword();

                $valid=password_verify($pwd,$pwdHash);
                if ($valid==false){
                    echo("E-mail et/ou mot de passe incorrects");
                } else {
                    return $this->redirectToRoute('default');
                }
            }
        }
        return $this->render('connexion/connexion.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/motdepasseoublie", name="forgotpwd")
     */
    public function forgotpwd()
    {
        return $this->render('connexion/forgotpwd.html.twig');
    }
}
