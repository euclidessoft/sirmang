<?php

namespace App\Form;

use App\Entity\Partenairecellule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PartenairecelluleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', null, ['label' => false, 'attr' => [ 'placeholder' => 'Nom du partenaire']])
            ->add('adresse', null, ['label' => false, 'attr' => [ 'placeholder' => 'Adresse du partenaire']])
            ->add('phone', null, ['label' => false, 'attr' => [ 'placeholder' => 'téléphone du partenaire']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Partenairecellule::class,
        ]);
    }
}
