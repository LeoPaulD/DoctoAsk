<?php

namespace App\Controller;

use App\Form\EditUsersType;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class EditUsersController extends AbstractController
{
      /**
       * @Route("/editUsers/{id}", name="editUsers")
       */
      public function index(Request $request, $id)
      {
        $user = new Users();

        $user = $this->getDoctrine()
            ->getRepository(Users::class)
            ->findOneBy(array('id' => $id));

        $form = $this->createForm(EditUsersType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('profil', array('id' => $id));
        }

        return $this->render(
          'edit_users/editUsers.html.twig',
          array('form' => $form->createView())
        );
    }
}
