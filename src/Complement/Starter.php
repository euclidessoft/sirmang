<?php
namespace App\Complement;


class Starter
{

	

	public function level($em)
	{// verification de la definition des cycles
		
		$level = $em->getRepository(Classe::class)->findAll();
		if(!empty($level)) return true; else return false;
	}

	public function Year($em)
	{// verification du demarrage d'une annee scolaire
		
		$year = $em->getRepository(AnneeScolaire::class)->findOneBy(array('current' => true));
		if(!empty($year)) return true; else return false;
	}
}