<?php

namespace SecureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objet
 *
 * @ORM\Table(name="secure_objet")
 * @ORM\Entity(repositoryClass="SecureBundle\Repository\ObjetRepository")
 */
class Objet
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
    * @ORM\OneToMany(targetEntity="ObjetDroit", mappedBy="objet")
    */
    private $droitobjets;

    /**
    * @ORM\OneToMany(targetEntity="GroupeMenu", mappedBy="objet")
    */
    private $groupeobjets;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

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
     * Set code
     *
     * @param string $code
     *
     * @return Objet
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
     * Set name
     *
     * @param string $name
     *
     * @return Objet
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return Objet
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
     * @return Objet
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
        $this->droitobjets = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groupeobjets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add droitobjet
     *
     * @param \SecureBundle\Entity\ObjetDroit $droitobjet
     *
     * @return Objet
     */
    public function addDroitobjet(\SecureBundle\Entity\ObjetDroit $droitobjet)
    {
        $this->droitobjets[] = $droitobjet;

        return $this;
    }

    /**
     * Remove droitobjet
     *
     * @param \SecureBundle\Entity\ObjetDroit $droitobjet
     */
    public function removeDroitobjet(\SecureBundle\Entity\ObjetDroit $droitobjet)
    {
        $this->droitobjets->removeElement($droitobjet);
    }

    /**
     * Get droitobjets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDroitobjets()
    {
        return $this->droitobjets;
    }

    /**
     * Add groupeobjet
     *
     * @param \SecureBundle\Entity\GroupeMenu $groupeobjet
     *
     * @return Objet
     */
    public function addGroupeobjet(\SecureBundle\Entity\GroupeMenu $groupeobjet)
    {
        $this->groupeobjets[] = $groupeobjet;

        return $this;
    }

    /**
     * Remove groupeobjet
     *
     * @param \SecureBundle\Entity\GroupeMenu $groupeobjet
     */
    public function removeGroupeobjet(\SecureBundle\Entity\GroupeMenu $groupeobjet)
    {
        $this->groupeobjets->removeElement($groupeobjet);
    }

    /**
     * Get groupeobjets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupeobjets()
    {
        return $this->groupeobjets;
    }
}
