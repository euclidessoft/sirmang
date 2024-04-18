<?php

namespace App\Form;

use App\Entity\Transfertcellule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransfertcelluleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('montant', null, array('required'=> true, 'label' => false,'attr' =>array ('placeholder' => 'Montant transfert')))
        ->add('motif', null, array('required'=> true, 'label' => false,'attr' =>array ('placeholder' => 'Motif transfert')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Transfertcellule::class,
        ]);
    }
}
