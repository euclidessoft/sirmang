<?php

namespace App\Form;

use App\Entity\Financementcellule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FinancementcelluleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('montant', null, ['label' => false, 'attr' => [ 'placeholder' => 'Montant du Financement']])
            ->add('datefinance', null, ['label' => false, 'attr' => [ 'placeholder' => 'Date du Financement']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Financementcellule::class,
        ]);
    }
}
