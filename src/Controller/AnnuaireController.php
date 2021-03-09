<?php

namespace App\Controller;

use App\Entity\Infos;
use App\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class AnnuaireController extends AbstractController
{
    /**
     * @Route("/annuaire", name="annuaire")
     */
    public function annuaire()
    {
        // New user creation
        $users = new User();
        // Get all users from database
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        // New infos users creation
        $infos = new Infos();
        // Get all users informations from database
        $infos = $this->getDoctrine()->getRepository(Infos::class)->findAll();

        // Return annuaire page with users and infos data
        return $this->render('annuaire/annuaire.html.twig',array('users'=>$users, 'infos'=>$infos));
    }

    /**
    * @Route("/annuaire/liste", name="liste_docteurs", condition="request.isXmlHttpRequest()")
    */
    public function liste(Request $request)
    {
       //Get superglobal nom medecin
       $nom_medecin = $request->request->get('nom_medecin');

       //Define array for storage result medecin (id)
       $tab=[];

       //verify nom medecin value
       if(!empty($nom_medecin))
       {
           // New user data creation
           $user_data=new User();
           $user_data = $this->getDoctrine()->getRepository(User::class);

           // Get all medecins
           $medecins = $user_data->findBy(
               ['nom' => $nom_medecin]
           );

           // Get all medecins
           foreach($medecins as $medecin)
           {
            $id = $medecin->getId();
            $nom = $medecin->getNom();
            $prenom = $medecin->getPrenom();
            $specialiste = $medecin->getSpecialite();
            $tab[]= array("id"=>$id, "nom"=>$nom,"prenom"=>$prenom,"specialité"=>$specialiste); 
           }
        
       }
       // Return JSON array
       return new JsonResponse($tab);
     }
}
