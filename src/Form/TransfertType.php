<?php

namespace App\Form;

use App\Entity\Transfert;
use App\Entity\Cellule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TransfertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('montant', null, array('required'=> true, 'label' => false,'attr' =>array ('placeholder' => 'Montant transfert')))
            ->add('motif', null, array('required'=> true, 'label' => false,'attr' =>array ('placeholder' => 'Motif transfert')))
            ->add('cellule', EntityType::class, [
                'class' => Cellule::class,
                'choice_label' => 'nom',
                'placeholder' => 'Cellule *',
                'required' => true,
                'label' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Transfert::class,
        ]);
    }
}
