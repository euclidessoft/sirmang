<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DepensecelluleRepository")
 */
class Depensecellule
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Rubrique")
     * @ORM\JoinColumn(nullable=true)
     */
    private $rubrique;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cellule")
     * @ORM\JoinColumn(nullable=true)
     */
    private $cellule;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Activitecellule")
     * @ORM\JoinColumn(nullable=true)
     */
    private $activite;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="string", length=255)
	 * @Assert\Length(min = 4, minMessage="Longueur comprise entre 4 et 100 caractères",max = 100, maxMessage="Longueur comprise entre 4 et 100 caractères")
	 * @Assert\NotBlank(message = "Renseignez le motif")
     */
    private $motif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    

    public function __construct()
    {
        $this->date = new \Datetime();
    }

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

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): self
    {
        $this->motif = $motif;

        return $this;
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

    public function getCellule(): ?Cellule
    {
        return $this->cellule;
    }

    public function setCellule(?Cellule $cellule): self
    {
        $this->cellule = $cellule;

        return $this;
    }

    public function getActivite(): ?Activitecellule
    {
        return $this->activite;
    }

    public function setActivite(?Activitecellule $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

    public function getRubrique(): ?Rubrique
    {
        return $this->rubrique;
    }

    public function setRubrique(?Rubrique $rubrique): self
    {
        $this->rubrique = $rubrique;

        return $this;
    }
}
