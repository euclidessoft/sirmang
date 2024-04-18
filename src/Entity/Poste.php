<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PosteRepository")
 * @UniqueEntity(
 * fields ={"nom"},
 * message = "Ce poste existe deja"
 *)
 */
class Poste
{
    /**
     * @ORM\Column(type="boolean")
     */
    private $cellule;

    /**
	* @ORM\OneToOne(targetEntity="App\Entity\User")
	* @ORM\JoinColumn(nullable=true)
	*/
	private $user;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bureau;

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

    public function getBureau(): ?string
    {
        return $this->bureau;
    }

    public function setBureau(string $bureau): self
    {
        $this->bureau = $bureau;

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

    public function getCellule(): ?bool
    {
        return $this->cellule;
    }

    public function setCellule(bool $cellule): self
    {
        $this->cellule = $cellule;

        return $this;
    }
}
