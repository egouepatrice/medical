<?php

namespace Entities\EntitiesCliniqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GespaFamille
 *
 * @ORM\Table(name="entities_clinique_gespa_famille")
 * @ORM\Entity(repositoryClass="Entities\EntitiesCliniqueBundle\Repository\GespaFamilleRepository")
 */
class GespaFamille
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
     * @var integer
     *
     * @ORM\Column(name="IdCabinet", type="integer", nullable=false)
     */
    private $idCabinet;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

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
     * @return GespaFamille
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
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return GespaFamille
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
     * @return GespaFamille
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
     * Set idCabinet
     *
     * @param integer $idCabinet
     *
     * @return GespaFamille
     */
    public function setIdCabinet($idCabinet)
    {
        $this->idCabinet = $idCabinet;

        return $this;
    }

    /**
     * Get idCabinet
     *
     * @return integer
     */
    public function getIdCabinet()
    {
        return $this->idCabinet;
    }
}
