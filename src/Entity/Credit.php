<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Credit
 *
 * @ORM\Table(name="credit")
 * @ORM\Entity(repositoryClass="App\Repository\CreditRepository")
 */
class Credit
{
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Autreentree")
     * @ORM\JoinColumn(nullable=true)
     */
    private $autreentree;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Transfertcellule")
     * @ORM\JoinColumn(nullable=true)
     */
    private $transfertcellule;
    
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Financement")
     * @ORM\JoinColumn(nullable=true)
     */
    private $financement;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\AcquitAssignation")
     * @ORM\JoinColumn(nullable=true)
     */
    private $acquitassignation;
    
	/**
     * @ORM\OneToOne(targetEntity="App\Entity\Cotismensuel")
     * @ORM\JoinColumn(nullable=true)
     */
    private $cotismensuel;
	
	
	
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

    private $repere;

    private $repere1;
	
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
     * @return Credit
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
     * @return Credit
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
    
    public function setRepere($repere)
    {
        $this->repere = $repere;

        return $this;
    }

    public function getRepere()
    {
        return $this->repere;
    }

    public function setRepere1($repere1)
    {
        $this->repere1 = $repere1;

        return $this;
    }

    public function getRepere1()
    {
        return $this->repere1;
    }

    public function getCotismensuel(): ?Cotismensuel
    {
        return $this->cotismensuel;
    }

    public function setCotismensuel(?Cotismensuel $cotismensuel): self
    {
        $this->cotismensuel = $cotismensuel;

        return $this;
    }

    public function getAcquitassignation(): ?AcquitAssignation
    {
        return $this->acquitassignation;
    }

    public function setAcquitassignation(?AcquitAssignation $acquitassignation): self
    {
        $this->acquitassignation = $acquitassignation;

        return $this;
    }

    public function getFinancement(): ?Financement
    {
        return $this->financement;
    }

    public function setFinancement(?Financement $financement): self
    {
        $this->financement = $financement;

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

    public function getAutreentree(): ?Autreentree
    {
        return $this->autreentree;
    }

    public function setAutreentree(?Autreentree $autreentree): self
    {
        $this->autreentree = $autreentree;

        return $this;
    }
}
