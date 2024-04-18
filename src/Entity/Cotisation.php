<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CotisationRepository")
 */
class Cotisation
{

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cellule")
     * @ORM\JoinColumn(nullable=true)
     */
    private $cellule;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getCellule(): ?Cellule
    {
        return $this->cellule;
    }

    public function setCellule(?Cellule $cellule): self
    {
        $this->cellule = $cellule;

        return $this;
    }
}
