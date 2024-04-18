<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FinancementcelluleRepository")
 */
class Financementcellule
{
    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Cellule")
    * @ORM\JoinColumn(nullable=false)
    */
    private $cellule;

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Partenairecellule")
    * @ORM\JoinColumn(nullable=false)
    */
    private $partenaire;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="champ obligatoire")
     * @Assert\Regex(
     * pattern= "/^(\d{2}\/){2}\d{4}$/",
     * match = true,
     * message = "Date invalide")
     */
    private $datefinance;

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

    public function getDatefinance(): ?string
    {
        return $this->datefinance;
    }

    public function setDatefinance(string $datefinance): self
    {
        $this->datefinance = $datefinance;

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

    public function getPartenaire(): ?Partenairecellule
    {
        return $this->partenaire;
    }

    public function setPartenaire(?Partenairecellule $partenaire): self
    {
        $this->partenaire = $partenaire;

        return $this;
    }
}
