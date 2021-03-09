<?php

namespace App\Form;

use App\Entity\Infos;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditInfosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // 1- Champ Présentation
            ->add('presentation', TextareaType::class, array(
                'label' => 'Votre description :',
                'attr' => array(
                  'placeholder' => "Ex : Le Docteur Ask vous accueille dans son cabinet à Bordeaux. Elle reçoit les enfants et les adultes pour tous types de soins médicaux généraux (consultation, contrôle annuel, vaccination, bilan de santé). La praticienne assure le suivi et la vaccination des nourrissons et des enfants. Elle offre également un accompagnement et des conseils en allaitement maternel. Enfin, elle propose un suivi gynécologique de base avec la prescription de moyens de contraception et la réalisation de frottis ...."
                ),
                'required'  => false
            ))
            // 2- Champ Horaires
            ->add('horaires', TextareaType::class, array(
                'label' => 'Vos horaires d\'ouverture :',
                'attr' => array(
                  'placeholder' => "Ex: Votre médecin est ouvert du lundi au vendredi de 9 h à 20 h et le samedi de 10 h à 14h ..."
                ),
                'required'  => true
            ))
            // 3- Champ Rue de Cabinet
            ->add('rue_cabinet', TextType::class, array('label' => 'Rue du Cabinet* :','required' => true))
            // 4- Champ Ville de Cabinet
            ->add('ville_cabinet', TextType::class, array('label' => 'Ville* :','required' => true))
            // 5- Champ Code Postal de Cabinet
            ->add('code_postal', NumberType::class, array('label' => 'Code Postal* :','required' => true))
            // 6- Champ Pays de Cabinet
            ->add('pays_cabinet', TextType::class, array('label' => 'Pays* :','required' => true))
            // 7- Champ Tarifs
            ->add('tarif', NumberType::class, array(
                'label' => 'Tarif de la consultation (en €) : :',
                'attr' => array(
                  'placeholder' => "Ex: 25"
                ),
                'required'  => true
            ))
            // 8- Champ Secteur
            ->add('convention', ChoiceType::class, array(
                'label' => 'Secteur Conventionnel :',
                'choices'   => array(
                  '1' => 1,
                  '2' => 2
                ),
                'required'  => true
            ))
            // 9- Champ Carte vitale
            ->add('carte_vitale', ChoiceType::class, array(
                'label' => 'Carte vitale acceptée :',
                'choices'   => array(
                  'Non' => 0,
                  'Oui' => 1
                ),
                'required'  => true
            ))
            // 10- Champ Carte bancaire
            ->add('cb', ChoiceType::class, array(
                'label' => 'Carte bancaire :',
                'choices'   => array(
                  'Non' => 0,
                  'Oui' => 1
                ),
                'required'  => true
            ))
            // 11- Champ Chèque
            ->add('cheque', ChoiceType::class, array(
                'label' => 'Chèque :',
                'choices'   => array(
                  'Non' => 0,
                  'Oui' => 1
                ),
                'required'  => true
            ))
            // 12- Champ Espèce
            ->add('espece', ChoiceType::class, array(
                'label' => 'Espèce :',
                'choices'   => array(
                  'Non' => 0,
                  'Oui' => 1
                ),
                'required'  => true
            ))
            // 13- Button Submit
            ->add('sauvegarder', SubmitType::class, array(
                'label' => 'Sauvegarder',
                'attr' => array('class' => "primary-btn bg-sub col-8 mb-3")
            ))
            ->getForm();
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Infos::class,
        ]);
    }
}
