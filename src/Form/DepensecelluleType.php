<?php

namespace App\Form;

use App\Entity\Rubrique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DepensecelluleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('rubrique', EntityType::class, [
            'class' => Rubrique::class,
            'choice_label' => 'nom',
            'placeholder' => 'Rubrique',
            'required' => false,
            'label' => false
        ])
		->add('motif', TextType::class, array('label' => false, 'required'=> true,'attr' =>array ('placeholder' => 'Responsable')))
        ->add('montant', TextType::class, array('label' => false, 'required'=> true,'attr' =>array ('placeholder' => 'Montant')))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Depensecellule'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'depense';
    }


}
