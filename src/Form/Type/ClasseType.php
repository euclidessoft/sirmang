<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ClasseType extends AbstractType
{
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
						'choices' => array(
							'L1' => 'L1',
							'L2' => 'L2',
                            'L3' => 'L3',
                            'M1' => 'M1',
                            'M2' => 'M2',
                            'D1' => 'D1',
                            'D2' => 'D2',
                            'D3' => 'D3',
							)
						));
	}
	public function getParent()
	{
		return ChoiceType::class;
	}

}