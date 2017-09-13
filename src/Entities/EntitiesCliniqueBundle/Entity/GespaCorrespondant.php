<?php

namespace Entities\EntitiesCliniqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GespaCorrespondant
 *
 * @ORM\Table(name="entities_clinique_gespa_correspondant")
 * @ORM\Entity(repositoryClass="Entities\EntitiesCliniqueBundle\Repository\GespaCorrespondantRepository")
 */
class GespaCorrespondant
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
     * @var bool
     *
     * @ORM\Column(name="enActivite", type="boolean")
     */
    private $enActivite;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return GespaCorrespondant
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
     * @return GespaCorrespondant
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
     * Set enActivite
     *
     * @param boolean $enActivite
     *
     * @return GespaCorrespondant
     */
    public function setEnActivite($enActivite)
    {
        $this->enActivite = $enActivite;

        return $this;
    }

    /**
     * Get enActivite
     *
     * @return bool
     */
    public function getEnActivite()
    {
        return $this->enActivite;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return GespaCorrespondant
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
     * @return GespaCorrespondant
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
     * @return GespaCorrespondant
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
}
