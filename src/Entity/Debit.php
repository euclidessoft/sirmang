<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Debit
 *
 * @ORM\Table(name="debit")
 * @ORM\Entity(repositoryClass="App\Repository\DebitRepository")
 */
class Debit
{
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Transfert")
     * @ORM\JoinColumn(nullable=true)
     */
    private $transfert;
	
	/**
     * @ORM\OneToOne(targetEntity="App\Entity\Depense")
     * @ORM\JoinColumn(nullable=true)
     */
    private $depense;
	
	
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
	
	/**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Debit
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
	
	/**
     * Constructor
     */
    public function __construct()
    {
        $this->date = new \Datetime();
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Debit
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer
     */
    public function getMontant()
    {
        return $this->montant;
    }

    public function getDepense(): ?Depense
    {
        return $this->depense;
    }

    public function setDepense(?Depense $depense): self
    {
        $this->depense = $depense;

        return $this;
    }

    public function getTransfert(): ?Transfert
    {
        return $this->transfert;
    }

    public function setTransfert(?Transfert $transfert): self
    {
        $this->transfert = $transfert;

        return $this;
    }

}
