<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Nouveaute;
use App\Repository\NouveauteRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Form\NouveauteType;

class NouveauteController extends AbstractController
{
    /**
     * @Route("/nouveaute", name="nouveaute")
     */
    public function nouveaute(NouveauteRepository $repo)
    {

        $nouveautes = $repo->findAll();

        return $this->render('nouveaute/nouveaute.html.twig', [
            'controller_name' => 'NouveauteController',
            'nouveautes'=> $nouveautes,
        ]);
    }
    /**
     * @Route("/nouveaute/new", name="nouveaute_creat")
     * @Route("/nouveaute/{id}/edit", name="nouveaute_edit")
     */
    /*public function form(Nouveaute $nouveaute = null, Request $request, ObjectManager $manager)
    {
        if(!$nouveaute) {
            $nouveaute = new Nouveaute();
        }
        $form = $this->createForm(NouveauteType::class, $nouveaute);
        $form -> handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){

            $manager->persist($nouveaute);
            $manager->flush();
            return $this->redirectToRoute('nouveaute');
        };
        return $this->render('nouveaute/creat.html.twig', [
            'formNouveaute' => $form->createView(),
            'editMode'=> $nouveaute -> getId()!== null,
        ]);

    }*/

}
