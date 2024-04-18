<?php

namespace App\Form;

use App\Entity\Assignation;
use App\Entity\Activite;
use App\Repository\ActiviteRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AssignationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('activite', EntityType::class, [
            'class' => Activite::class,
            'choice_label' => 'nom',
            'query_builder' => function(ActiviteRepository $repository)  { return $repository->poste(); },
            'placeholder' => 'Activite *',
            'required' => true,
            'label' => false
        ])
            ->add('dateeven', DateType::class, array( 'widget' => 'single_text','label' => 'Date limite','attr' => ['title' => 'Date'],))
            ->add('montant', null, [ 'label' =>false, 'attr' => ['placeholder' => 'Montant']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Assignation::class,
        ]);
    }
}
