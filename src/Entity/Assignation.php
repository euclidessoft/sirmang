<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AssignationRepository")
 * * @UniqueEntity(
 * fields ={"activite"},
 * message = "Activite deja assignee"
 *)
 */
class Assignation
{
     /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Activite")
    * @ORM\JoinColumn(nullable=false)
    * @Assert\Valid()
    */
    private $activite;
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
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="champ obligatoire")
     */
    private $dateeven;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="boolean")
     */
    private $current;

    public function __construct()
    {
        $this->date = new \Datetime();
        $this->current = true;
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

    public function getCurrent(): ?bool
    {
        return $this->current;
    }

    public function setCurrent(bool $current): self
    {
        $this->current = $current;

        return $this;
    }

    public function getDateeven(): ?\DateTimeInterface
    {
        return $this->dateeven;
    }

    public function setDateeven(\DateTimeInterface $dateeven): self
    {
        $this->dateeven = $dateeven;

        return $this;
    }

    public function getActivite(): ?Activite
    {
        return $this->activite;
    }

    public function setActivite(?Activite $activite): self
    {
        $this->activite = $activite;

        return $this;
    }
}
