<?php
namespace App\Complement;


class Mois
{
	public function Moisfr()
	{
		$mois = date('M');
		switch($mois)
		{
			case 'Jan': $mois = 'Decembre'; break;
			case 'Feb': $mois = 'Janvier'; break;
			case 'Mar': $mois = 'Fevrier'; break;
			case 'Apr': $mois = 'Mars'; break;
			case 'May': $mois = 'Avril'; break;
			case 'Jun': $mois = 'Mai'; break;
			case 'Jul': $mois = 'Juin'; break;
			case 'Aug': $mois = 'Juillet'; break;
			case 'Sep': $mois = 'Aout'; break;
			case 'Oct': $mois = 'Septembre'; break;
			case 'Nov': $mois = 'Octobre'; break;
			case 'Dec': $mois = 'Novembre'; break;
		}
		return $mois;
	}
	public function Inclus($insc)
	{//verivication si l'eleve fait parti de la comptabite du mois en cour
		 
		$date = $insc->getDate();
		$date1 = new \Datetime();
		if($date1 > $date)
		{// date courante doit imperativement etre superieur a la date d'incription	
			$mois = (int)substr((string)$date->format('Y-m-d H:i:s'),5,2);    // recuperation du mois d'inscription
			$current = (int)date('m');              // mois en cour
			if($mois+1 ==  $current )
			{// mois qui suit le mois d'inscription
				$nbrjours = 30 - (int)substr((string)$date->format('Y-m-d H:i:s'),8,2);  //calcule du nombre de jours
				if($nbrjours > 10) return true;
				else return false;
			}
			else if ($mois+1 == 13 && $current == 1)
			{// mois qui suit le mois d'inscription est janvier
				$nbrjours = 30 - (int)substr((string)$date->format('Y-m-d H:i:s'),8,2);
				if($nbrjours > 10) return true;
				else return false;
			}
			else if ($mois == $current)
			{// mois en cour
				return false;
			}
			else return true;//les mois ne se suivant pas -->inclus daufice
		}
		else return false;
		
	}
	public function Current($mois)
	{
		$current = $this->MoisFr();
		if($current == $mois) return true;
		else return false;
		
	}
}