<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CelluleRepository")
 */
class Cellule
{


    /**
    * @ORM\OneToOne(targetEntity="App\Entity\Cotisation")
    * @ORM\JoinColumn(nullable=true)
    */
    private $cotisation;
    
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="champ obligatoire")
     */
    private $nom;

//     /**
//     * @ORM\Column(type="string", length=255)
//     * @Assert\NotBlank(message="champ obligatoire")
//     */
//    private $numcellule;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
//
//    public function getNumcellule(): ?string
//    {
//        return $this->numcellule;
//    }
//
//    public function setNumcellule(string $numcellule): self
//    {
//        $this->numcellule = $numcellule;
//
//        return $this;
//    }

    public function getCotisation(): ?Cotisation
    {
        return $this->cotisation;
    }

    public function setCotisation(Cotisation $cotisation): self
    {
        $this->cotisation = $cotisation;

        return $this;
    }
}
