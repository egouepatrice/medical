<?php

namespace Entities\EntitiesAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosteOccuper
 *
 * @ORM\Table(name="entities_admin_poste_occuper")
 * @ORM\Entity(repositoryClass="Entities\EntitiesAdminBundle\Repository\PosteOccuperRepository")
 */
class PosteOccuper
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
     * @var Entities\EntitiesBundle\Entity\Poste
     *
     * @ORM\ManyToOne(targetEntity="Poste")
     * @ORM\JoinColumn(nullable=false)
     */
    private $poste;

    /**
     * @var Entities\EntitiesBundle\Entity\Employe
     *
     * @ORM\ManyToOne(targetEntity="Employe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $employe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date")
     */
    private $dateFin;

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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return PosteOccuper
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return PosteOccuper
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     *
     * @return PosteOccuper
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
     * Set poste
     *
     * @param \Entities\EntitiesAdminBundle\Entity\Poste $poste
     *
     * @return PosteOccuper
     */
    public function setPoste(\Entities\EntitiesAdminBundle\Entity\Poste $poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return \Entities\EntitiesAdminBundle\Entity\Poste
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set employe
     *
     * @param \Entities\EntitiesAdminBundle\Entity\Employe $employe
     *
     * @return PosteOccuper
     */
    public function setEmploye(\Entities\EntitiesAdminBundle\Entity\Employe $employe)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \Entities\EntitiesAdminBundle\Entity\Employe
     */
    public function getEmploye()
    {
        return $this->employe;
    }
}
