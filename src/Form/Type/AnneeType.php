<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AnneeType extends AbstractType
{
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
						'choices' => array(
							'2001' => '2001',
							'2002' => '2002',
                            '2003' => '2003',
							'2004' => '2004',
                            '2005' => '2005',
							'2006' => '2006',
                            '2007' => '2007',
							'2008' => '2008',
                            '2009' => '2009',
							'2010' => '2010',
                            '2011' => '2011',
							'2012' => '2012',
                            '2013' => '2013',
							'2014' => '2014',
                            '2015' => '2015',
							'2016' => '2016',
                            '2017' => '2017',
							'2018' => '2018',
                            '2019' => '2019',
							'2020' => '2020',
                            '2021' => '2021',
							'2022' => '2022',
							)
						));
	}
	public function getParent()
	{
		return ChoiceType::class;
	}

}