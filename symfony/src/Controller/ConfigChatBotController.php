<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Reponses;
use App\Entity\Questions;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class ConfigChatBotController extends AbstractController
{
    /**
     * @Route("/ConfigChatBot/{id}", name="configchatbot")
     */
    public function index($id)
    {
        // New user creation with getUser for Session
        $user = $this->getUser();
       
            
        // if new user (object) is null, return notFound page
        if($user == NULL  || $id != $user->getId()) {
            
                return $this->redirectToRoute('default');
        }
        else {

            $maxQuestion = false;
            $repository = $this->getDoctrine()->getRepository(Questions::class);
            $questions = $repository->findBy(
                ['idMedecin' => $id]
            );
            if($user->getOffre()->getId() == 1)
            {
                $max=25;
            }
            else {
                $max=50;
            }

            if(count($questions) >= $max)
            {
                $maxQuestion = true;
            }
            
            $repositoryR = $this->getDoctrine()->getRepository(Reponses::class);
            $reponses = $repositoryR->findBy(
                ['idMedecin' => $id]
            );
        
            return $this->render('configchatbot/index.html.twig', array('questions'=>$questions,'reponses'=>$reponses,'maxQuestion'=>$maxQuestion,'id'=>$id));
        }
    }
    
    /**
     * @Route("/configchatbot/ajout/{id}", name="ajout", condition="request.isXmlHttpRequest()")
     */
    public function ajout(Request $request, $id)
    {
        $user = $this->getUser();
       
            
        // if new user (object) is null, return notFound page
        if($user == NULL  || $id != $user->getId()) {
            return new JsonResponse("Non connecté");
        }
        else
        {
        $question = $request->request->get('question');
        $reponse = $request->request->get('reponse');
        $repository = $this->getDoctrine()->getRepository(Questions::class);
        $questions = $repository->findBy(
            ['idMedecin' => $id]
        );
        if(count($questions)<=20)
        {
            if (!empty($reponse))
            {
                $entityManager = $this->getDoctrine()->getManager();
        
                $newQuestion = new Questions();
                $newQuestion->setContenu($question);
                $newQuestion->setIdMedecin($entityManager->getReference(User::class, $id));
                $entityManager->persist($newQuestion);
                $entityManager->flush();
                
                $newReponse = new Reponses();
                $newReponse->setContenu($reponse);
                $newReponse->setIdQuestion($entityManager->getReference(Questions::class, $newQuestion->getId()));
                $newReponse->setIdMedecin($entityManager->getReference(User::class, $id));
                $entityManager->persist($newReponse);
                $entityManager->flush();
            return new JsonResponse($reponse);
            }
        } 
    }
    }

    /**
     * @Route("/configchatbot/modifier/{id}", name="modifier", condition="request.isXmlHttpRequest()")
     */
    public function modifier(Request $request)
    {
        $user = $this->getUser();
        if($user == NULL) {
            return new JsonResponse("Non connecté");
        }
        else
        {
        $question = $request->request->get('question');
        $reponse = $request->request->get('reponse');
        $id = $request->request->get('idQuestion');

        
        $entityManager = $this->getDoctrine()->getManager();
        
        $questionRep = $entityManager->getRepository(Questions::class)->find($id);
        $reponseRep = $entityManager->getRepository(Reponses::class)->findOneBy(['idQuestion'=>$id]);

        if (!$questionRep) {
            throw $this->createNotFoundException(
                'Pas de question trouvé pour l\'id '.$id
            );
        }
        if (!$reponseRep) {
            throw $this->createNotFoundException(
                'Pas de reponse trouvé pour l\'id '.$id
            );
        }

        $questionRep->setContenu($question);
        $reponseRep->SetContenu($reponse);
        $entityManager->flush();

        return new JsonResponse($reponse);
        }
    }

    /**
     * @Route("/configchatbot/supprimer/{id}", name="supprimer", condition="request.isXmlHttpRequest()")
     */
    public function supprimer(Request $request)
    {
        $user = $this->getUser();
        if($user == NULL) {
            return new JsonResponse("Non connecté");
        }
        else
        {
        $id = $request->request->get('idQuestion');

        $entityManager = $this->getDoctrine()->getManager();
        
        $question = $entityManager->getRepository(Questions::class)->find($id);
        $reponse = $entityManager->getRepository(Reponses::class)->findOneBy(['idQuestion'=>$id]);

        if (!$question) {
            throw $this->createNotFoundException(
                'Pas de question trouvé pour l\'id '.$id
            );
        }
        if (!$reponse) {
            throw $this->createNotFoundException(
                'Pas de reponse trouvé pour l\'id '.$id
            );
        }

        $entityManager->remove($question);
        $entityManager->remove($reponse);
        $entityManager->flush();

        return new JsonResponse("supprimé !");
    }
    
    }
}
