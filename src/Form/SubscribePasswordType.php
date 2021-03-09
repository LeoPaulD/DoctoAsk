<?php

namespace App\Form;

use App\Entity\Connexion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class SubscribePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('password', RepeatedType::class, array(
                  'type' => PasswordType::class,
                  'invalid_message' => 'The password fields must match.',
                  'required' => true,
                  'first_options'  => array('label' => 'Mot de passe :', 'attr' => array('class' => 'mb-3')),
                  'second_options' => array('label' => 'Confirmer votre mot de passe :', 'attr' => array('class' => ''))
            ))
            ->add('inscription', SubmitType::class, array('label' => 'S\'inscrire', 'attr' => array('class' => "primary-btn bg-sub col-8 mb-3")))
            ->getForm();
        ;
    }
}
