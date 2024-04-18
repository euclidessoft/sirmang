<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DebitcelluleRepository")
 */
class Debitcellule
{
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Transfertcellule")
     * @ORM\JoinColumn(nullable=true)
     */
    private $transfertcellule;
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Depensecellule")
     * @ORM\JoinColumn(nullable=true)
     */
    private $depensecellule;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cellule")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cellule;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    
    public function __construct()
    {
        $this->date = new \Datetime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
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

    public function getDepensecellule(): ?Depensecellule
    {
        return $this->depensecellule;
    }

    public function setDepensecellule(?Depensecellule $depensecellule): self
    {
        $this->depensecellule = $depensecellule;

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

    public function getTransfertcellule(): ?Transfertcellule
    {
        return $this->transfertcellule;
    }

    public function setTransfertcellule(?Transfertcellule $transfertcellule): self
    {
        $this->transfertcellule = $transfertcellule;

        return $this;
    }
}
