<?php

namespace App\Form;

use App\Entity\Activitecellule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivitecelluleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class, array( 'widget' => 'single_text','attr' => ['title' => 'Date'],))
            ->add('nom')
            ->add('budjet', null , ['required' =>  false])
            ->add('lieu')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Activitecellule::class,
        ]);
    }
}
