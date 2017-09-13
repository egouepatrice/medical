<?php

namespace SecureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="secure_groupe")
 * @ORM\Entity(repositoryClass="SecureBundle\Repository\GroupeRepository")
 */
class Groupe
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
    * @ORM\OneToMany(targetEntity="UserGroupe", mappedBy="groupe")
    */
    private $usergroupes;

    /**
    * @ORM\OneToMany(targetEntity="GroupeMenu", mappedBy="groupe")
    */
    private $menugroupes;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, unique=true)
     */
    private $code;

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
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="roles", type="string", length=255, nullable=true)
     */
    private $roles;

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
     * @return Groupe
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Groupe
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
     * @return Groupe
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
     * Set description
     *
     * @param string $description
     *
     * @return Groupe
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
     * Set roles
     *
     * @param string $roles
     *
     * @return Groupe
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return string
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return Groupe
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
     * @return Groupe
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
        $this->usergroupes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->menugroupes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add usergroupe
     *
     * @param \SecureBundle\Entity\UserGroupe $usergroupe
     *
     * @return Groupe
     */
    public function addUsergroupe(\SecureBundle\Entity\UserGroupe $usergroupe)
    {
        $this->usergroupes[] = $usergroupe;

        return $this;
    }

    /**
     * Remove usergroupe
     *
     * @param \SecureBundle\Entity\UserGroupe $usergroupe
     */
    public function removeUsergroupe(\SecureBundle\Entity\UserGroupe $usergroupe)
    {
        $this->usergroupes->removeElement($usergroupe);
    }

    /**
     * Get usergroupes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsergroupes()
    {
        return $this->usergroupes;
    }

    /**
     * Add menugroupe
     *
     * @param \SecureBundle\Entity\GroupeMenu $menugroupe
     *
     * @return Groupe
     */
    public function addMenugroupe(\SecureBundle\Entity\GroupeMenu $menugroupe)
    {
        $this->menugroupes[] = $menugroupe;

        return $this;
    }

    /**
     * Remove menugroupe
     *
     * @param \SecureBundle\Entity\GroupeMenu $menugroupe
     */
    public function removeMenugroupe(\SecureBundle\Entity\GroupeMenu $menugroupe)
    {
        $this->menugroupes->removeElement($menugroupe);
    }

    /**
     * Get menugroupes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMenugroupes()
    {
        return $this->menugroupes;
    }
}
