<?php

namespace App\Controller;

use App\Entity\Infos;
use App\Form\EditInfosType;
use App\Entity\User;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class EditInfosController extends AbstractController
{
    /**
     * @Route("/infos/edit", name="editInfos")
     */
    public function index(Request $request)
    {
        // New user creation with getUser for Session
        $user = $this->getUser();

        // if new user (object) is null, return notFound page
        if($user == NULL) {

          return $this->redirectToRoute('default');

        }
        else {

        // Get ID user
        $id = $user->getId();

        // New user infos creation
        $infos = new Infos();

        // Get infos from user with his ID
        $infos = $this->getDoctrine()
            ->getRepository(Infos::class)
            ->findOneBy(array('idMedecin' => $id));

        $entityManager = $this->getDoctrine()->getManager();

        // if user infos (object) is null, so create default (init) user infos
        if ($infos == NULL) {
          $infos = new Infos();
          $infos->setIdMedecin($entityManager->getReference(User::class, $id));
        }

        $form = $this->createForm(EditInfosType::class, $infos);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // 4) save the User!
            $entityManager->persist($infos);
            $entityManager->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('profile');
        }

        return $this->render(
          'edit_infos/editInfos.html.twig',
          array('form' => $form->createView())
        );
      }
    }
}
