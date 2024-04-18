<?php

namespace App\Form;

use App\Entity\Inscription;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClassearabeeditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('montantrecu')
            ->add('date')
            ->add('registermodalite')
            ->add('retenu')
            ->add('anneescolaire')
            ->add('eleve')
            ->add('classe')
            ->add('Classearabe')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Inscription::class,
        ]);
    }
}
