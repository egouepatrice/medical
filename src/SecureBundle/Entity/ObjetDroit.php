<?php

namespace SecureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjetDroit
 *
 * @ORM\Table(name="secure_objet_droit")
 * @ORM\Entity(repositoryClass="SecureBundle\Repository\ObjetDroitRepository")
 */
class ObjetDroit
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
     * @var \SecureBundle\Entity\Objet
     *
     * @ORM\ManyToOne(targetEntity="Objet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $objet;

    /**
     * @var \SecureBundle\Entity\Droit
     *
     * @ORM\ManyToOne(targetEntity="Droit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $droit;

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
     * @return ObjetDroit
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
     * Set objet
     *
     * @param \SecureBundle\Entity\Objet $objet
     *
     * @return ObjetDroit
     */
    public function setObjet(\SecureBundle\Entity\Objet $objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return \SecureBundle\Entity\Objet
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set droit
     *
     * @param \SecureBundle\Entity\Droit $droit
     *
     * @return ObjetDroit
     */
    public function setDroit(\SecureBundle\Entity\Droit $droit)
    {
        $this->droit = $droit;

        return $this;
    }

    /**
     * Get droit
     *
     * @return \SecureBundle\Entity\Droit
     */
    public function getDroit()
    {
        return $this->droit;
    }
}
