<?php

namespace App\Form;

use App\Entity\Financement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FinancementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datefinance', null, ['label' => false, 'attr' => [ 'placeholder' => 'Date du Financement']])
            ->add('montant', null, ['label' => false, 'attr' => [ 'placeholder' => 'Montant du financement']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Financement::class,
        ]);
    }
}
