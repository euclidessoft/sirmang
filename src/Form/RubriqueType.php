<?php

namespace App\Form;

use App\Entity\Rubrique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RubriqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null,array('label' => false, 'required'=> true,'attr' =>array ('placeholder' => 'Nom rubrique')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Rubrique::class,
        ]);
    }
}
