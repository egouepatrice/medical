<?php

namespace Entities\EntitiesCliniqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GespaAllergie
 *
 * @ORM\Table(name="entities_clinique_gespa_allergie")
 * @ORM\Entity(repositoryClass="Entities\EntitiesCliniqueBundle\Repository\GespaAllergieRepository")
 */
class GespaAllergie
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
     * @var Entities\EntitiesCliniqueBundle\Entity\GespaPatient
     *
     * @ORM\ManyToOne(targetEntity="GespaPatient")
     * @ORM\JoinColumn(nullable=false)
     */
    private $patient;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return GespaAllergie
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
     * Set patient
     *
     * @param \Entities\EntitiesCliniqueBundle\Entity\GespaPatient $patient
     *
     * @return GespaAllergie
     */
    public function setPatient(\Entities\EntitiesCliniqueBundle\Entity\GespaPatient $patient)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \Entities\EntitiesCliniqueBundle\Entity\GespaPatient
     */
    public function getPatient()
    {
        return $this->patient;
    }
}
