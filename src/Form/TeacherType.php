<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class TeacherType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('prenom')
		->add('nom')
		->add('datenaissance', DateType::class, array( 'widget' => 'single_text', 'html5' => false,'attr' => ['class' => 'js-datepicker','placeholder' => 'jj/mm/yyyy'],))/* personnalisation */
		->add('lieunaissance')
        ->add('telephone')
        ->add('salary')
		->add('adresse')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Teacher'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ecole_financesbundle_teacher';
    }


}
