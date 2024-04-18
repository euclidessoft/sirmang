<?php
namespace App\Complement;

use App\Entity\Image;
use App\Entity\Documents;

class Upload
{

	public function EleveAddoc($user, $em,$recordname)
	{
	
			$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png', 'docx', 'doc', 'pdf' );
		//1. strrchr renvoie l'extension avec le point (« . »).//2. substr(chaine,1) ignore le premier caractère de chaine.//3. strtolower met l'extension en minuscules.
		$extension_upload = strtolower(  substr(  strrchr($_FILES['newdoc']['name'], '.')  ,1)  );
		if ( !in_array($extension_upload,$extensions_valides) ) throw $this->createNotFoundHttpException('Seul  les documents .jpg,  .gif , .png, .docx, .doc, .pdf sont pris en compte');
		
		$nom = md5(uniqid(rand(), true));//Créer un identifiant difficile à deviner

		$targetFile = 'Documents/Eleves/'.$user->getMatricule().'/'.$nom.'.'.$extension_upload;  //fichier de destination
		$storeFolder = 'Documents/Eleves/'.$user->getMatricule();  //dossier de sauvegarde
		/* $image_sizes = getimagesize($_FILES['icone']['tmp_name']);
		if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight) $erreur = "Image trop grande";*/


			if(!is_dir($storeFolder))
			{
				mkdir($storeFolder, 0777 );
				if(move_uploaded_file($_FILES['newdoc']['tmp_name'],$targetFile)) //6
				{
					$image= new Documents();
					$image->setUrl($nom.'.'.$extension_upload);
					$image->setAlt($recordname);
					$image->setEleve($user);
					$em->persist($image);
					$em->flush();
				}
			}
			else
			{
			
				if(move_uploaded_file($_FILES['newdoc']['tmp_name'],$targetFile)) //6
				{
					$image= new Documents();
					$image->setUrl($nom.'.'.$extension_upload);
					$image->setAlt($recordname);
					$image->setEleve($user);
					$em->persist($image);
					$em->flush();
				}
			} 
	}
	private function image($image, $dest, $ext)
	{
		if($ext == 'jpg' or $ext == 'jpeg') $source = imagecreatefromjpeg($image); // La photo est la source		
		elseif($ext == 'gif') $source = imagecreatefromgif($image); // La photo est la source		
		else $source = imagecreatefrompng($image); // La photo est la source		
		// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
		$largeur_source = imagesx($source);
		$hauteur_source = imagesy($source);
		if($largeur_source > $hauteur_source )
		{
			$destination = imagecreatetruecolor(960, 720); // On crée la miniature vide
		}
		else
		{
			$destination = imagecreatetruecolor(720, 960); // On crée la miniature vide
		}
		
		
		
		$largeur_destination = imagesx($destination);
		$hauteur_destination = imagesy($destination);
		// On crée l'image
		imagecopyresampled($destination, $source, 0, 0, 0, 0,
		$largeur_destination, $hauteur_destination, $largeur_source,
		$hauteur_source);
		// On enregistre l'image
		if($ext == 'jpg' or $ext == 'jpeg') imagejpeg($destination, $dest);		
		elseif($ext == 'gif') imagegif($destination, $dest); 		
		else imagepng($destination, $dest);
		 return true;
	}
	private function miniature($image, $dest, $ext)
	{
		if($ext == 'jpg' or $ext == 'jpeg') $source = imagecreatefromjpeg($image); // La photo est la source		
		elseif($ext == 'gif') $source = imagecreatefromgif($image); // La photo est la source		
		else $source = imagecreatefrompng($image); // La photo est la source		
		// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
		$largeur_source = imagesx($source);
		$hauteur_source = imagesy($source);
		if($largeur_source > $hauteur_source )
		{
			$larg =150;
			$proport = $largeur_source / 150;
			$haut = $hauteur_source / $proport;
		}
		else
		{
			$haut =150;
			$proport = $hauteur_source / 150;
			$larg = $largeur_source / $proport;
		}
		
		$destination = imagecreatetruecolor($larg, $haut); // On crée la miniature vide
		
		$largeur_destination = imagesx($destination);
		$hauteur_destination = imagesy($destination);
		// On crée la miniature
		imagecopyresampled($destination, $source, 0, 0, 0, 0,
		$largeur_destination, $hauteur_destination, $largeur_source,
		$hauteur_source);
		// On enregistre la miniature
		if($ext == 'jpg' or $ext == 'jpeg') imagejpeg($destination, $dest);		
		elseif($ext == 'gif') imagegif($destination, $dest); 		
		else imagepng($destination, $dest);
		
	}
}