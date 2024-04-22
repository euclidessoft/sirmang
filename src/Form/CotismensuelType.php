<?php

namespace App\Form;

use App\Entity\Cotismensuel;
use App\Entity\Mois;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CotismensuelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' =>function ($user){ return $user->getPrenom(). " ".$user->getNom(); },
                'placeholder' => 'Selectionnez membre',
                'required' => true,
                'label' => false
            ])
            ->add('mois', EntityType::class, [
                'class' => Mois::class,
                'choice_label' => 'nom',
                'placeholder' => 'Toutes l\'annee',
                'required' => false,
                'label' => false
            ])
            ->add('montant', null, ['label' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cotismensuel::class,
        ]);
    }
}
