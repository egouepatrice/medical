<?php

namespace SecureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="secure_menu")
 * @ORM\Entity(repositoryClass="SecureBundle\Repository\MenuRepository")
 */
class Menu
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
    * @ORM\OneToMany(targetEntity="MenuDroit", mappedBy="menu")
    */
    private $droitmenus;

    /**
    * @ORM\OneToMany(targetEntity="GroupeMenu", mappedBy="menu")
    */
    private $groupemenus;

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
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="route", type="string", length=255, nullable=true)
     */
    private $route;

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
     * @return Menu
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
     * @return Menu
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
     * @return Menu
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
     * Set url
     *
     * @param string $url
     *
     * @return Menu
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set route
     *
     * @param string $route
     *
     * @return Menu
     */
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return Menu
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
     * @return Menu
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
        $this->droitmenus = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groupemenus = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add droitmenu
     *
     * @param \SecureBundle\Entity\MenuDroit $droitmenu
     *
     * @return Menu
     */
    public function addDroitmenu(\SecureBundle\Entity\MenuDroit $droitmenu)
    {
        $this->droitmenus[] = $droitmenu;

        return $this;
    }

    /**
     * Remove droitmenu
     *
     * @param \SecureBundle\Entity\MenuDroit $droitmenu
     */
    public function removeDroitmenu(\SecureBundle\Entity\MenuDroit $droitmenu)
    {
        $this->droitmenus->removeElement($droitmenu);
    }

    /**
     * Get droitmenus
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDroitmenus()
    {
        return $this->droitmenus;
    }

    /**
     * Add groupemenu
     *
     * @param \SecureBundle\Entity\GroupeMenu $groupemenu
     *
     * @return Menu
     */
    public function addGroupemenu(\SecureBundle\Entity\GroupeMenu $groupemenu)
    {
        $this->groupemenus[] = $groupemenu;

        return $this;
    }

    /**
     * Remove groupemenu
     *
     * @param \SecureBundle\Entity\GroupeMenu $groupemenu
     */
    public function removeGroupemenu(\SecureBundle\Entity\GroupeMenu $groupemenu)
    {
        $this->groupemenus->removeElement($groupemenu);
    }

    /**
     * Get groupemenus
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupemenus()
    {
        return $this->groupemenus;
    }
}
