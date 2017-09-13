<?php

namespace Entities\EntitiesAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AssuranceCabinet
 *
 * @ORM\Table(name="entities_admin_assurance_cabinet")
 * @ORM\Entity(repositoryClass="Entities\EntitiesAdminBundle\Repository\AssuranceCabinetRepository")
 */
class AssuranceCabinet
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
     * @var Entities\EntitiesBundle\Entity\Assurance
     *
     * @ORM\ManyToOne(targetEntity="Assurance")
     * @ORM\JoinColumn(nullable=false)
     */
    private $assurance;

    /**
     * @var Entities\EntitiesBundle\Entity\Cabinet
     *
     * @ORM\ManyToOne(targetEntity="Cabinet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cabinet;

    /**
     * @var bool
     *
     * @ORM\Column(name="statut", type="boolean")
     */
    private $statut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateResiliation", type="date")
     */
    private $dateResiliation;

    /**
     * @var string
     *
     * @ORM\Column(name="motifResiliation", type="text")
     */
    private $motifResiliation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreate", type="datetime")
     */
    private $dateCreate;


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
     * Set statut
     *
     * @param boolean $statut
     *
     * @return AssuranceCabinet
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
     * Set dateResiliation
     *
     * @param \DateTime $dateResiliation
     *
     * @return AssuranceCabinet
     */
    public function setDateResiliation($dateResiliation)
    {
        $this->dateResiliation = $dateResiliation;

        return $this;
    }

    /**
     * Get dateResiliation
     *
     * @return \DateTime
     */
    public function getDateResiliation()
    {
        return $this->dateResiliation;
    }

    /**
     * Set motifResiliation
     *
     * @param string $motifResiliation
     *
     * @return AssuranceCabinet
     */
    public function setMotifResiliation($motifResiliation)
    {
        $this->motifResiliation = $motifResiliation;

        return $this;
    }

    /**
     * Get motifResiliation
     *
     * @return string
     */
    public function getMotifResiliation()
    {
        return $this->motifResiliation;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return AssuranceCabinet
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
     * Set assurance
     *
     * @param \Entities\EntitiesAdminBundle\Entity\Assurance $assurance
     *
     * @return AssuranceCabinet
     */
    public function setAssurance(\Entities\EntitiesAdminBundle\Entity\Assurance $assurance)
    {
        $this->assurance = $assurance;

        return $this;
    }

    /**
     * Get assurance
     *
     * @return \Entities\EntitiesAdminBundle\Entity\Assurance
     */
    public function getAssurance()
    {
        return $this->assurance;
    }

    /**
     * Set cabinet
     *
     * @param \Entities\EntitiesAdminBundle\Entity\Cabinet $cabinet
     *
     * @return AssuranceCabinet
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
