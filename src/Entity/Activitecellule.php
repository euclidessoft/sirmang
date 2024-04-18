<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActivitecelluleRepository")
 */
class Activitecellule
{
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
     * @ORM\Column(type="datetime")
     */
    private $date;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu;

    /**
     * @var int
     *
     * @ORM\Column(name="budjet", type="integer")
     */
    private $budjet;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="boolean")
     */
    private $current;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->current = true;
        $this->budjet = 0;
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

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getCurrent(): ?bool
    {
        return $this->current;
    }

    public function setCurrent(bool $current): self
    {
        $this->current = $current;

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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getBudjet(): ?int
    {
        return $this->budjet;
    }

    public function setBudjet(int $budjet): self
    {
        $this->budjet = $budjet;

        return $this;
    }
}
