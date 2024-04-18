<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CreditcelluleRepository")
 */
class Creditcellule
{
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Autreentreecellule")
     * @ORM\JoinColumn(nullable=true)
     */
    private $autreentree;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Transfert")
     * @ORM\JoinColumn(nullable=true)
     */
    private $transfert;
    
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Financementcellule")
     * @ORM\JoinColumn(nullable=true)
     */
    private $financementcellule;

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
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
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

    public function getCotismensuel(): ?Cotismensuel
    {
        return $this->cotismensuel;
    }

    public function setCotismensuel(?Cotismensuel $cotismensuel): self
    {
        $this->cotismensuel = $cotismensuel;

        return $this;
    }

    public function getCellule(): ?Cellule
    {
        return $this->cellule;
    }

    public function setCellule(Cellule $cellule): self
    {
        $this->cellule = $cellule;

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

    public function getFinancementcellule(): ?Financementcellule
    {
        return $this->financementcellule;
    }

    public function setFinancementcellule(?Financementcellule $financementcellule): self
    {
        $this->financementcellule = $financementcellule;

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

    public function getAutreentree(): ?Autreentreecellule
    {
        return $this->autreentree;
    }

    public function setAutreentree(?Autreentreecellule $autreentree): self
    {
        $this->autreentree = $autreentree;

        return $this;
    }
}
