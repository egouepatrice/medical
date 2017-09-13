<?php

namespace SecureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Droit
 *
 * @ORM\Table(name="secure_droit")
 * @ORM\Entity(repositoryClass="SecureBundle\Repository\DroitRepository")
 */
class Droit
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
    * @ORM\OneToMany(targetEntity="ObjetDroit", mappedBy="droit")
    */
    private $objetdroits;

    /**
    * @ORM\OneToMany(targetEntity="MenuDroit", mappedBy="droit")
    */
    private $menudroits;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var bool
     *
     * @ORM\Column(name="statut", type="boolean")
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="codification", type="string", length=255)
     */
    private $codification;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Droit
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     *
     * @return Droit
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return bool
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set codification
     *
     * @param string $codification
     *
     * @return Droit
     */
    public function setCodification($codification)
    {
        $this->codification = $codification;

        return $this;
    }

    /**
     * Get codification
     *
     * @return string
     */
    public function getCodification()
    {
        return $this->codification;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return Droit
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
     * @return Droit
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
     * Constructor
     */
    public function __construct()
    {
        $this->objetdroits = new \Doctrine\Common\Collections\ArrayCollection();
        $this->menudroits = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add objetdroit
     *
     * @param \SecureBundle\Entity\ObjetDroit $objetdroit
     *
     * @return Droit
     */
    public function addObjetdroit(\SecureBundle\Entity\ObjetDroit $objetdroit)
    {
        $this->objetdroits[] = $objetdroit;

        return $this;
    }

    /**
     * Remove objetdroit
     *
     * @param \SecureBundle\Entity\ObjetDroit $objetdroit
     */
    public function removeObjetdroit(\SecureBundle\Entity\ObjetDroit $objetdroit)
    {
        $this->objetdroits->removeElement($objetdroit);
    }

    /**
     * Get objetdroits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObjetdroits()
    {
        return $this->objetdroits;
    }

    /**
     * Add menudroit
     *
     * @param \SecureBundle\Entity\MenuDroit $menudroit
     *
     * @return Droit
     */
    public function addMenudroit(\SecureBundle\Entity\MenuDroit $menudroit)
    {
        $this->menudroits[] = $menudroit;

        return $this;
    }

    /**
     * Remove menudroit
     *
     * @param \SecureBundle\Entity\MenuDroit $menudroit
     */
    public function removeMenudroit(\SecureBundle\Entity\MenuDroit $menudroit)
    {
        $this->menudroits->removeElement($menudroit);
    }

    /**
     * Get menudroits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMenudroits()
    {
        return $this->menudroits;
    }
}
