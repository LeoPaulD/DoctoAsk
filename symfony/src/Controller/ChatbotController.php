<?php

namespace App\Controller;

use App\Form\ChatbotType;
use App\Entity\Questions;
use App\Entity\Reponses;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class ChatbotController extends AbstractController
{
    /**
     * @Route("/chatbot/{id}", name="chatbot")
     */
    public function chatbot(Request $request,$id)
    {     
        //#########@####### test ###################      
        // $repository = $this->getDoctrine()->getRepository(Questions::class);
        // $repositoryR = $this->getDoctrine()->getRepository(Reponses::class);
    
        // $reponses = $repositoryR->findOneBy(['id_question' => 1]);
        // echo $reponses->getContenu();
        // $questions = $repository->findAll();
        
        // foreach($questions as $question)
        // {
        //     $contenu = $question->getContenu();
        //     similar_text("test", $contenu,$compare);
        //     echo $contenu."<br>";
        // }
       //###################################

       $user = $this->getDoctrine()
       ->getRepository(User::class)
       ->find($id);

        return $this->render('chatbot/chatbot.html.twig', array('user' => $user,'id' => $id));

    }

    /**
     * @Route("/chatbot/compare/{id}", name="question_compare", condition="request.isXmlHttpRequest()")
     */
    
    public function compare(Request $request, $id)
    {
       
        $repository = $this->getDoctrine()->getRepository(Questions::class);
        $repositoryR = $this->getDoctrine()->getRepository(Reponses::class);

       
        if($request->isXmlHttpRequest())
        {
            
            $questionUser = $request->request->get('question');
            $erreur_empty = "empty";
            $salutations = false;
            if(!empty($questionUser))
            {
                $tabSalut = array('Bonjour','Salut','Salutation','Coucou','Bonsoir','Hello','Hola','Allo','Wesh','bonjour','salut','salutation','coucou','bonsoir','hello','hola','allo','wesh');
                
                foreach ($tabSalut as $word) {
                    if (similar_text($questionUser, $word) >= strlen($word)) {
                      $salutations = true;
                    }
                  }


                  if ($salutations == true) {
                    $repBot = "Bonjour, comment puis-je vous aider&nbsp;? ";
                  }
                 if ($salutations==false)
                  {
                    if (str_word_count($questionUser)>=3) {
                    $bestId=0;
                    $moyenne=0;
                    
                    $questions = $repository->findBy(['idMedecin' => $id]);

                    foreach($questions as $question)
                    {
                        // echo $question->getContenu();
                        $contenu = $question->getContenu();
                        similar_text($questionUser, $contenu,$compare);
              
                        if ($compare > $moyenne) {
                            $moyenne = $compare;
                            $bestId = $question->getId();
                        }
                    }

                    $reponse = $repositoryR->findOneBy(['idQuestion' => $bestId]);
                    $repBot = $reponse->getContenu();

                    
                    }
                    else{
                      $repBot = "Veuillez reformuler votre question.";
                    }
                  }                  

                return new Response($repBot);
            }
            else
            {
                return new Response($erreur_empty);
            }
        }     
    }

}
