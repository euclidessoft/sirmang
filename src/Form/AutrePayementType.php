<?php

namespace App\Form;

use App\Entity\Eleve;
use App\Repository\EleveRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AutrePayementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('eleve', EntityType::class,
            array( 'class' => Eleve::class,
                'choice_label' => function($eleve){ return $eleve->getMatricule().' '.$eleve->getPrenom().' '.$eleve->getNom();},
                'multiple' => false,
                'query_builder' => function(EleveRepository $repository){ return $repository->Inscris(); },
                'placeholder' => 'Selectionner un eleve'))
        ->add('motif')
		->add('montantrecu');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\AutrePayement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ecole_financesbundle_autrepayement';
    }


}
