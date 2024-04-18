<?php
namespace App\Complement;


class Mensualite
{
	public function Montantdue($eleve)
	{
		if($eleve != null)
		{
			$montantdue = 0;
			$montant1 = ($eleve->getClasse() != null) ? $eleve->getClasse()->getModalite()->getMensualite()  : 0 ;
			$montant2 = ($eleve->getClassearabe() != null) ? $eleve->getClassearabe()->getModalite()->getMensualite()  : 0 ;
            
			if( $montant1 > $montant2 )
            {
               $montantdue = $montant1;
            }
            else
            {
                $montantdue = $montant2;
            }
			if(!empty($eleve->getServices()))
			{
				foreach($eleve->getServices() as $eleveservice)
				{
					$montantdue = $montantdue + $eleveservice->getService()->getMontant();
				}
			}
			if(!empty($eleve->getReductions()))
			{
				foreach($eleve->getReductions() as $elevereduction)
				{
					$montantdue = $montantdue - $elevereduction->getMontant();
				}
			}
			return $montantdue;
		}
	}

	
	public function Payet($eleve)
	{
		$montantdue = $this->Montantdue($eleve);
		$montantretenu = 0;
		if(!empty($eleve->getRetenus()))
		{
			foreach($eleve->getRetenus() as $retenu)
			{
				$montantretenu = $montantretenu + $retenu->getMontant();
			}
		}
		if($montantretenu >= $montantdue) return true;
		else return false;
	}
}