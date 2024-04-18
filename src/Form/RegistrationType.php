<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Region;
use App\Form\Type\BloodGroupType;
use App\Form\Type\SexeType;
use App\Form\Type\StatusType;
use App\Form\Type\SituationType;
use App\Form\Type\FemmesType;
use App\Form\Type\ClasseType;
use App\Form\Type\AnneeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('adresse', null,['label' => 'Adresse'])
        ->add('prenom', null,['label' => 'Prenom'])
        ->add('nom', null,['label' => 'Nom'])
            ->add('profession', ChoiceType::class, [
                'choices' => User::jobs,
                'placeholder' => 'Fonction *',
                'label' => false,
                'required' => true
            ])
        //->add('datenaiss', DateType::class, array( 'label' => "Date de naissance",'widget' => 'single_text','attr' => ['title' => 'Date de naissance'],))
        ->add('birthday', null, array( 'label' => false))
        ->add('lieunaiss', null,['label' => "Lieu de naissance"])
        ->add('sexe', SexeType::class,array('placeholder' => 'Civilite *'))
            ->add('email', null,['label' => false])
            ->add('phone', null,['label' => false])
            //->add('matricule', null,['label' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
