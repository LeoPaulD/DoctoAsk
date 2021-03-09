<?php

namespace App\Controller;

use App\Entity\Infos;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function showUser()
    {
          $user = $this->getUser();

          $id = $user->getId();

          if (!is_object($user) || !$user instanceof UserInterface) {
              throw new AccessDeniedException('This user does not have access to this section.');
          }

          $infos = $this->getDoctrine()
              ->getRepository(Infos::class)
              ->find($id);

          return $this->render('@FOSUser/Profile/show.html.twig', array(
              'user' => $user, 'infos' => $infos,
          ));
    }
}
