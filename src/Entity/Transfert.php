<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TransfertRepository")
 */
class Transfert
{
   /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cellule")
     * @ORM\JoinColumn(nullable=true)
     */
    private $cellule;
    
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
	  * @Assert\Length(min = 3, minMessage="3 chiffres au minimum",max = 9, maxMessage="9 chiffres au maximum")
	  * @Assert\NotBlank(message = "Renseignez le montant")
	 * @Assert\Regex(
	 * pattern= "/^\d+$/",
	 * match = true,
	 * message = "Des Des chiffres uniquement")
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
    /**
     * Constructor
     */
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
}
