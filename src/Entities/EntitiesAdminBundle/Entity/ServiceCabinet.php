<?php

namespace Entities\EntitiesAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceCabinet
 *
 * @ORM\Table(name="entities_admin_service_cabinet")
 * @ORM\Entity(repositoryClass="Entities\EntitiesAdminBundle\Repository\ServiceCabinetRepository")
 */
class ServiceCabinet
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
     * @var Entities\EntitiesBundle\Entity\Cabinet
     *
     * @ORM\ManyToOne(targetEntity="Cabinet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cabinet;

    /**
     * @var Entities\EntitiesBundle\Entity\ActeDentaire
     *
     * @ORM\ManyToOne(targetEntity="ActeDentaire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $acteDentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prixCabinet", type="float")
     */
    private $prixCabinet;

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
     * Set description
     *
     * @param string $description
     *
     * @return ServiceCabinet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prixCabinet
     *
     * @param float $prixCabinet
     *
     * @return ServiceCabinet
     */
    public function setPrixCabinet($prixCabinet)
    {
        $this->prixCabinet = $prixCabinet;

        return $this;
    }

    /**
     * Get prixCabinet
     *
     * @return float
     */
    public function getPrixCabinet()
    {
        return $this->prixCabinet;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return ServiceCabinet
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
     * @return ServiceCabinet
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
     * @return ServiceCabinet
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
     * Set acteDentaire
     *
     * @param \Entities\EntitiesAdminBundle\Entity\ActeDentaire $acteDentaire
     *
     * @return ServiceCabinet
     */
    public function setActeDentaire(\Entities\EntitiesAdminBundle\Entity\ActeDentaire $acteDentaire)
    {
        $this->acteDentaire = $acteDentaire;

        return $this;
    }

    /**
     * Get acteDentaire
     *
     * @return \Entities\EntitiesAdminBundle\Entity\ActeDentaire
     */
    public function getActeDentaire()
    {
        return $this->acteDentaire;
    }
}
