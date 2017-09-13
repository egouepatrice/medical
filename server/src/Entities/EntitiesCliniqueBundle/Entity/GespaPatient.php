<?php

namespace Entities\EntitiesCliniqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GespaPatient
 *
 * @ORM\Table(name="entities_clinique_gespa_patient")
 * @ORM\Entity(repositoryClass="Entities\EntitiesCliniqueBundle\Repository\GespaPatientRepository")
 */
class GespaPatient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Entities\EntitiesAdminBundle\Entity\Cabinet
     *
     * @ORM\ManyToOne(targetEntity="Entities\EntitiesAdminBundle\Entity\Cabinet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cabinet;

    /**
     * @var Entities\EntitiesCliniqueBundle\Entity\GespaFamille
     *
     * @ORM\ManyToOne(targetEntity="Entities\EntitiesCliniqueBundle\Entity\GespaFamille")
     * @ORM\JoinColumn(nullable=true)
     */
    private $famille;

    /**
     * @var Entities\EntitiesCliniqueBundle\Entity\GespaCorrespondant
     *
     * @ORM\ManyToOne(targetEntity="Entities\EntitiesCliniqueBundle\Entity\GespaCorrespondant")
     * @ORM\JoinColumn(nullable=true)
     */
    private $correspondant;

    /**
     * @var Entities\EntitiesCliniqueBundle\Entity\GespaPatient
     *
     * @ORM\ManyToOne(targetEntity="Entities\EntitiesCliniqueBundle\Entity\GespaPatient")
     * @ORM\JoinColumn(nullable=true)
     */
    private $patientRecommande;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, unique=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=255)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nomJeuneFille", type="string", length=255, nullable=true)
     */
    private $nomJeuneFille;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="destinataireCourier", type="string", length=255, nullable=true)
     */
    private $destinataireCourier;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=255, nullable=true)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="autreInfos", type="text", nullable=true)
     */
    private $autreInfos;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=255, nullable=true)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="autreTelephone", type="string", length=255, nullable=true)
     */
    private $autreTelephone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreate", type="datetime")
     */
    private $dateCreate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUpdate", type="datetime")
     */
    private $dateUpdate;

    /**
     * @var SecureBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="SecureBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userCreate;

    /**
     * @var SecureBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="SecureBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userUpdate;


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
     * Set code
     *
     * @param string $code
     *
     * @return GespaPatient
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     *
     * @return GespaPatient
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return GespaPatient
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return GespaPatient
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nomJeuneFille
     *
     * @param string $nomJeuneFille
     *
     * @return GespaPatient
     */
    public function setNomJeuneFille($nomJeuneFille)
    {
        $this->nomJeuneFille = $nomJeuneFille;

        return $this;
    }

    /**
     * Get nomJeuneFille
     *
     * @return string
     */
    public function getNomJeuneFille()
    {
        return $this->nomJeuneFille;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return GespaPatient
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return GespaPatient
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set destinataireCourier
     *
     * @param string $destinataireCourier
     *
     * @return GespaPatient
     */
    public function setDestinataireCourier($destinataireCourier)
    {
        $this->destinataireCourier = $destinataireCourier;

        return $this;
    }

    /**
     * Get destinataireCourier
     *
     * @return string
     */
    public function getDestinataireCourier()
    {
        return $this->destinataireCourier;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return GespaPatient
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return GespaPatient
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set autreInfos
     *
     * @param string $autreInfos
     *
     * @return GespaPatient
     */
    public function setAutreInfos($autreInfos)
    {
        $this->autreInfos = $autreInfos;

        return $this;
    }

    /**
     * Get autreInfos
     *
     * @return string
     */
    public function getAutreInfos()
    {
        return $this->autreInfos;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return GespaPatient
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return GespaPatient
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set autreTelephone
     *
     * @param string $autreTelephone
     *
     * @return GespaPatient
     */
    public function setAutreTelephone($autreTelephone)
    {
        $this->autreTelephone = $autreTelephone;

        return $this;
    }

    /**
     * Get autreTelephone
     *
     * @return string
     */
    public function getAutreTelephone()
    {
        return $this->autreTelephone;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return GespaPatient
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     *
     * @return GespaPatient
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;

        return $this;
    }

    /**
     * Get dateUpdate
     *
     * @return \DateTime
     */
    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }

    /**
     * Set cabinet
     *
     * @param \Entities\EntitiesAdminBundle\Entity\Cabinet $cabinet
     *
     * @return GespaPatient
     */
    public function setCabinet(\Entities\EntitiesAdminBundle\Entity\Cabinet $cabinet)
    {
        $this->cabinet = $cabinet;

        return $this;
    }

    /**
     * Get cabinet
     *
     * @return \Entities\EntitiesAdminBundle\Entity\Cabinet
     */
    public function getCabinet()
    {
        return $this->cabinet;
    }

    /**
     * Set famille
     *
     * @param \Entities\EntitiesCliniqueBundle\Entity\GespaFamille $famille
     *
     * @return GespaPatient
     */
    public function setFamille(\Entities\EntitiesCliniqueBundle\Entity\GespaFamille $famille = null)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return \Entities\EntitiesCliniqueBundle\Entity\GespaFamille
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set correspondant
     *
     * @param \Entities\EntitiesCliniqueBundle\Entity\GespaCorrespondant $correspondant
     *
     * @return GespaPatient
     */
    public function setCorrespondant(\Entities\EntitiesCliniqueBundle\Entity\GespaCorrespondant $correspondant = null)
    {
        $this->correspondant = $correspondant;

        return $this;
    }

    /**
     * Get correspondant
     *
     * @return \Entities\EntitiesCliniqueBundle\Entity\GespaCorrespondant
     */
    public function getCorrespondant()
    {
        return $this->correspondant;
    }

    /**
     * Set patientRecommande
     *
     * @param \Entities\EntitiesCliniqueBundle\Entity\GespaPatient $patientRecommande
     *
     * @return GespaPatient
     */
    public function setPatientRecommande(\Entities\EntitiesCliniqueBundle\Entity\GespaPatient $patientRecommande = null)
    {
        $this->patientRecommande = $patientRecommande;

        return $this;
    }

    /**
     * Get patientRecommande
     *
     * @return \Entities\EntitiesCliniqueBundle\Entity\GespaPatient
     */
    public function getPatientRecommande()
    {
        return $this->patientRecommande;
    }
}
