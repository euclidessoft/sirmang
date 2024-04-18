<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;
    
    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;
    
    private $file;
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set url
     *
     * @param string $url
     *
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;
        
        return $this;
    }
    
    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
        
        return $this;
    }
    
    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }
    
    public function getFile()
    {
        return $this->file;
    }
    
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }
    
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    
    public function upload() // id = id de la session en cour
    {
        // Si jamais il n'y a pas de fichier (champ facultatif), on ne fait rien
        if (null === $this->file)
        { return; }
        // On r�cup�re le nom original du fichier de l'internaute
        $name = $this->file->getClientOriginalName();
        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        //1. strrchr renvoie l'extension avec le point (� . �).
        //2. substr(chaine,1) ignore le premier caract�re de chaine.
        //3. strtolower met l'extension en minuscules.
        $extension_upload = strtolower(  substr(  strrchr($name, '.')  ,1)  );
        if ( !in_array($extension_upload,$extensions_valides) ) return false;
        else
        {
            $time = md5(uniqid(rand(), true));
            if(!is_dir($this->getUploadRootDir()))mkdir($this->getUploadRootDir(), 0777 );
            $setfile = $this->getUploadRootDir().'/'.$this->getNom().'.'.$extension_upload ;// creation de l'image de destination
            $this->miniature($this->file->getPathname(), $setfile, $extension_upload); //creation de la miniature avec l'image source
            // On sauvegarde le nom de fichier dans notre attribut $url
            $this->url = $this->getEleve()->getId().'/profil/'.$this->getNom().'.'.$extension_upload ;
            // On cr�e �galement le futur attribut alt de notre balise <img>
            $this->alt = $this->getNom() ;
            return true;
        }
    }
    
    public function getUploadDir()
    {
        // On retourne le chemin relatif vers l'image pour un navigateur (relatif au r�pertoire /web donc)
        return 'images/'.$this->getEleve()->getId(). '/profil';
    }
    
    protected function getUploadRootDir()
    {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../public/'.$this->getUploadDir($this->getEleve()->getId());
    }
    
    protected function miniature($image, $dest, $ext)
    {// creation de la miniature de l'image
        if($ext == 'jpg' or $ext == 'jpeg') $source = imagecreatefromjpeg($image); // La photo est la source
        elseif($ext == 'gif') $source = imagecreatefromgif($image); // La photo est la source
        else $source = imagecreatefrompng($image); // La photo est la source
        // Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
        $largeur_source = imagesx($source);
        $hauteur_source = imagesy($source);
        $larg =250;// largeur de l'image
        $haut =250;// hauteur de l'image
        
        $destination = imagecreatetruecolor($larg, $haut); // On cr�e la miniature vide
        
        $largeur_destination = imagesx($destination);
        $hauteur_destination = imagesy($destination);
        // On cr�e la miniature
        imagecopyresampled($destination, $source, 0, 0, 0, 0,
            $largeur_destination, $hauteur_destination, $largeur_source,
            $hauteur_source);
        // On enregistre la miniature
        if($ext == 'jpg' or $ext == 'jpeg') imagejpeg($destination, $dest);
        elseif($ext == 'gif') imagegif($destination, $dest);
        else imagepng($destination, $dest);
        
    }
}

