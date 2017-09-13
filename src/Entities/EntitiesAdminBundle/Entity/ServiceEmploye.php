<?php

namespace Entities\EntitiesAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceEmploye
 *
 * @ORM\Table(name="entities_admin_service_employe")
 * @ORM\Entity(repositoryClass="Entities\EntitiesAdminBundle\Repository\ServiceEmployeRepository")
 */
class ServiceEmploye
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
     * @var Entities\EntitiesBundle\Entity\ServiceCabinet
     *
     * @ORM\ManyToOne(targetEntity="ServiceCabinet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $serviceCabinet;

    /**
     * @var Entities\EntitiesBundle\Entity\ServiceEmploye
     *
     * @ORM\ManyToOne(targetEntity="ServiceEmploye")
     * @ORM\JoinColumn(nullable=false)
     */
    private $employe;

    /**
     * @var bool
     *
     * @ORM\Column(name="statut", type="boolean")
     */
    private $statut;


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
     * @return ServiceEmploye
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
     * Set serviceCabinet
     *
     * @param \Entities\EntitiesAdminBundle\Entity\ServiceCabinet $serviceCabinet
     *
     * @return ServiceEmploye
     */
    public function setServiceCabinet(\Entities\EntitiesAdminBundle\Entity\ServiceCabinet $serviceCabinet)
    {
        $this->serviceCabinet = $serviceCabinet;

        return $this;
    }

    /**
     * Get serviceCabinet
     *
     * @return \Entities\EntitiesAdminBundle\Entity\ServiceCabinet
     */
    public function getServiceCabinet()
    {
        return $this->serviceCabinet;
    }

    /**
     * Set employe
     *
     * @param \Entities\EntitiesAdminBundle\Entity\ServiceEmploye $employe
     *
     * @return ServiceEmploye
     */
    public function setEmploye(\Entities\EntitiesAdminBundle\Entity\ServiceEmploye $employe)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \Entities\EntitiesAdminBundle\Entity\ServiceEmploye
     */
    public function getEmploye()
    {
        return $this->employe;
    }
}
