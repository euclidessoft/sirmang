<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ZoneRepository")
 */
class Zone
{
    /**
	* @ORM\OneToMany(targetEntity="App\Entity\Cellule", mappedBy="zone")
	*/
	private $cellules;
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

    public function __construct()
    {
        $this->cellules = new ArrayCollection();
    }

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

    /**
     * @return Collection|Cellule[]
     */
    public function getCellules(): Collection
    {
        return $this->cellules;
    }

    public function addCellule(Cellule $cellule): self
    {
        if (!$this->cellules->contains($cellule)) {
            $this->cellules[] = $cellule;
            $cellule->setZone($this);
        }

        return $this;
    }

    public function removeCellule(Cellule $cellule): self
    {
        if ($this->cellules->contains($cellule)) {
            $this->cellules->removeElement($cellule);
            // set the owning side to null (unless already changed)
            if ($cellule->getZone() === $this) {
                $cellule->setZone(null);
            }
        }

        return $this;
    }
}
