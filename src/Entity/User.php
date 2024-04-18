<?php
// src/Entity/User.php

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="user")
 * @UniqueEntity(
 * fields ={"email"},
 * message = "Email deja utilise"
 *)
 */
class User implements UserInterface
{
    
    const jobs = [
    'Médecine' => 'Médecine' ,
    'Pharmacie' => 'Pharmacie' ,
    'Chirurgie Dentaire' => 'Chirurgie Dentaire' , 
    'Médecine Vétérinaire' => 'Médecine Vétérinaire', 
    'Soins Infirmiers' => 'Soins Infirmiers', 
    'Soins Ostétricaux' => 'Soins Ostétricaux',
    'Droit' => 'Droit',
    'Administration' => 'Administration',
    'Science et Technique' => 'Science et Technique',
    'Finances' => 'Finances',
    'Commerce' => 'Commerce',
    'Agronomie / Agriculture' => 'Agronomie / Agriculture',
    'Lettres / Sciences humaines' => 'Lettres / Sciences humaines',
    'Autre' => 'Autre'
    ];
    /*
    
    Médecine M
    Pharmacie P
    Chirurgie dentaire D
    Médecine Vétérinaire V
    Infirmier I
    Sage femme G
    Droit J
    Administration A
    Finances F
    Commerce C
    Agronomie/agriculture E
    Lettres / Sciences humaines L
    Autre X
    */
    /**
     * @ORM\Column(type="boolean")
     */
    private $poste;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cotisation;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $username;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $matricule;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="6", minMessage="trop court, 6 caracrteres mini")
     */
    private $password;
    
    /**
     *
     * @Assert\EqualTo(propertyPath="password", message="non conforme")
     */
    public $confirm;
    
    public $test;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="champ obligatoire")
     * @Assert\Email(message="email invalide")
     */
    private $email;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="champ obligatoire")
     */
    private $prenom;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="champ obligatoire")
     */
    private $nom;

     /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaiss", type="date", nullable=true)
     */
    private $datenaiss;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Regex(
     * pattern= "/^(\d{2}\/){2}\d{4}$/",
     * match = true,
     * message = "Date invalide")
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="lieunaiss", type="string", length=255, nullable=true)
	 * @Assert\Length(min = 3, minMessage="3 caractéres au minimum", max = 30, maxMessage="30 caractères au maximum")
     */
    private $lieunaiss;

     /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     * @Assert\NotBlank(message="champ obligatoire")
     * @Assert\Regex(
     * pattern= "/^(Monsieur)|(Madame)$/",
     * match = true,
     * message = "Sélectionnez la civilite")
     */
    private $sexe;

     /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=255, nullable=true)
     * @Assert\Length(min = 3, minMessage="3 caractères au minimum", max = 70, maxMessage="70 caractères au maximum")
     */
    private $profession;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $specialite;

    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="champ obligatoire")
     * @Assert\Regex(
     * pattern= "/^((3[03]\s?[89]\d{2}(\s?\d{2}){2})|(7[07685]\s?\d{3}(\s?\d{2}){2}))$/",
     * match = true,
     * message = "numero incorrect")
     */
    private $phone;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fonction;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    protected $roles = [];
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $resetToken;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $enabled;

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Cellule")
    * @ORM\JoinColumn(nullable=true)
    */
    private $cellule;

  

    public function __construct()
    {
        $this->enabled = false;
        $this->poste = false;
        //$this->payements = new ArrayCollection();
    }
    
    public function getUsername(): ?string
    {
        return $this->username;
    }
    
    public function setUsername(?string $username): self
    {
        $this->username = $username;
        
        return $this;
    }
    
    public function getPassword(): ?string
    {
        return $this->password;
    }
    
    public function setPassword(string $password): self
    {
        $this->password = $password;
        
        return $this;
    }
    
    public function getEmail(): ?string
    {
        return $this->email;
    }
    
    public function setEmail(string $email): self
    {
        $this->email = $email;
        
        return $this;
    }
    
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }
    
    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;
        
        return $this;
    }
    
    public function getNom(): ?string
    {
        return $this->nom;
    }
    
    public function setNom(?string $nom): self
    {
        $this->nom = $nom;
        
        return $this;
    }
    
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        
        return $this;
    }
    
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }
    
    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;
        
        return $this;
    }
    
    public function getFonction(): ?string
    {
        return $this->fonction;
    }
    
    public function setFonction(?string $fonction): self
    {
        $this->fonction = $fonction;
        
        return $this;
    }
    
    public function getsalt(): ?array
    {
        return null;
    }
    
    public function eraseCredentials()
    {
        return null;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getRoles(): ?array
    {
        return $this->roles;
    }
    
    public function setRoles(?array $role): self
    {
        $this->roles = $role;
        
        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }
    
    public function getTest(): ?string
    {
        return $this->test;
    }

    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }

    public function setResetToken(?string $resetToken): self
    {
        $this->resetToken = $resetToken;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getDatenaiss(): ?\DateTimeInterface
    {
        return $this->datenaiss;
    }

    public function setDatenaiss(?\DateTimeInterface $datenaiss): self
    {
        $this->datenaiss = $datenaiss;

        return $this;
    }

    public function getLieunaiss(): ?string
    {
        return $this->lieunaiss;
    }

    public function setLieunaiss(?string $lieunaiss): self
    {
        $this->lieunaiss = $lieunaiss;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }


    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(?string $profession): self
    {
        $this->profession = $profession;

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



    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    public function setBirthday(string $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    

    public function getPoste(): ?bool
    {
        return $this->poste;
    }

    public function setPoste(bool $poste): self
    {
        $this->poste = $poste;

        return $this;
    }

    public function getCotisation(): ?int
    {
        return $this->cotisation;
    }

    public function setCotisation(?int $cotisation): self
    {
        $this->cotisation = $cotisation;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(?string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    

    
}