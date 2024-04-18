<?php

namespace App\Form;

use App\Entity\Poste;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PosteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('user', EntityType::class, [
            'class' => User::class,
            'choice_label' => function($user){
                return $user->getNom(). " " . $user->getPrenom();

            },
            'query_builder' => function(UserRepository $repository)  { return $repository->poste(); },
            'placeholder' => 'Membre *',
            'required' => false,
            'label' => false
        ])
            ->add('nom')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Poste::class,
        ]);
    }
}
