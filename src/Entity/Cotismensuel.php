<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CotismensuelRepository")
 */
class Cotismensuel
{
    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Annee")
    * @ORM\JoinColumn(nullable=false)
    */
    private $annee;

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Mois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $mois;

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\User")
    * @ORM\JoinColumn(nullable=false)
    */
    private $user;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;
    
    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
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

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getAnnee(): ?Annee
    {
        return $this->annee;
    }

    public function setAnnee(?Annee $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getMois(): ?Mois
    {
        return $this->mois;
    }

    public function setMois(?Mois $mois): self
    {
        $this->mois = $mois;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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

    
}
