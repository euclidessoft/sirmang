<?php 
namespace App\Entity;

/**
 * @author Moda
 *
 */
class Recherche
{
    /**
     * @var string|null
     */
    private $profession;

     /**
     * @var string|null
     */
    private $sexe;

     /**
     * @var string|null
     */
    private $bloodgroup;

    /**
     * @var string|null
     */
    private $specialite;


    /**
     * @var string|null
     */
    private $region;
/**
     * @var string|null
     */
    private $departement;
/**
     * @var string|null
     */
    private $ville;
    /**
     * @var string|null
     */
    private $etablissement;

    /**
     * @var string|null
     */
    private $zone;

    /**
     * @var string|null
     */
    private $cellule;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $situation;

    /**
     * @var string|null
     */
    private $annee;
    

    /**
     * @return int|NULL
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @return int|NULL
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @return string|NULL
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @return string|NULL
     */
    public function getBloodgroup()
    {
        return $this->bloodgroup;
    }

    /**
     * 
     * @return string|NULL
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * 
     * @return string|NULL
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * 
     * @return string|NULL
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * 
     * @return string|NULL
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * 
     * @return string|NULL
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * 
     * @return string|NULL
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * 
     * @return string|NULL
     */
    public function getCellule()
    {
        return $this->cellule;
    }

     /**
     * 
     * @return string|NULL
     */
    public function getStatus()
    {
        return $this->status;
    }

     /**
     * 
     * @return string|NULL
     */
    public function getSituation()
    {
        return $this->situation;
    }



    /**
     * @param string|NULL $profession
     * @return recherche
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
        return $this;
    }

    /**
     * @param string|NULL $sexe
     * @return recherche
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * @param string|NULL $bloodgroup
     * @return recherche
     */
    public function setBloodgroup($bloodgroup)
    {
        $this->bloodgroup = $bloodgroup;
        return $this;
    }

    /**
     * @param string|NULL $specialite
     * @return recherche
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
        return $this;
    }

    /**
     * @param string|NULL $region
     * @return recherche
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }
    
    /**
     * @param string|NULL $departement
     * @return recherche
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
        return $this;
    }

    /**
     * @param string|NULL $ville
     * @return recherche
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
        return $this;
    }

    /**
     * @param string|NULL $etablissement
     * @return recherche
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;
        return $this;
    }

    /**
     * @param string|NULL $zone
     * @return recherche
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
        return $this;
    }

    /**
     * @param string|NULL $cellule
     * @return recherche
     */
    public function setCellule($cellule)
    {
        $this->cellule = $cellule;
        return $this;
    }

     /**
     * @param string|NULL $status
     * @return recherche
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string|NULL $situation
     * @return recherche
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;
        return $this;
    }

    /**
     * @param string|NULL $annee
     * @return recherche
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
        return $this;
    }
}

