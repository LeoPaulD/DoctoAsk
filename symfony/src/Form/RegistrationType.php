<?php
// src/App/Form/RegistrationType.php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder->remove('username');
      $builder->add('nom', TextType::class, array('label' => 'Nom* :','required' => true));
      $builder->add('prenom', TextType::class, array('label' => 'Prénom* :','required' => true));
      $builder->add('genre', ChoiceType::class, array(
          'label' => 'Genre :',
          'choices'   => array('Homme' => 0, 'Femme' => 1),
          'required'  => true,
          'expanded' => true,
          'multiple' => false,
          'data' => 0,
      ));
      $builder->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'options' => array(
                    'translation_domain' => 'FOSUserBundle',
                    'attr' => array(
                        'autocomplete' => 'new-password',
                    ),
                ),
                'first_options' => array('label' => 'form.password', 'attr' => array('class' => "col-md-6 d-flex flex-column mb-4")),
                'second_options' => array('label' => 'form.password_confirmation', 'attr' => array('class' => "col-md-6 d-flex flex-column")),
                'invalid_message' => 'fos_user.password.mismatch',
            ));
      $builder->add('specialite',ChoiceType::class, array(
                'label' => 'Specialité* :',
                'choices'   => array('Généraliste' => 'Généraliste', 'Ophtalmologue' => 'Ophtalmologue',
                'Psychiatre' => 'Psychiatre', 'Kinésithérapeute' => 'Kinésithérapeute',
                'Neurologue' => 'Neurologue', 'Pneumologue' => 'Pneumologue',
                'Chirurgien' => 'Chirurgien', 'Dentiste' => 'Dentiste'),
                'required'  => true,
            ));
      $builder->add('telephone', TelType::class, array('label' => 'Téléphone* :','required' => true));
      $builder->add('email', EmailType::class, array('label' => 'Mail* :','required' => true));
      $builder->add('site_web', TextType::class, array('label' => 'Site web :','required' => false));
      $builder->add('doctolib', TextType::class, array('label' => 'Doctolib :','required' => false));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
