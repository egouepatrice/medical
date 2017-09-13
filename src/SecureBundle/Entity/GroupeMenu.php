<?php

namespace SecureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupeMenu
 *
 * @ORM\Table(name="secure_groupe_menu")
 * @ORM\Entity(repositoryClass="SecureBundle\Repository\GroupeMenuRepository")
 */
class GroupeMenu
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
     * @var \SecureBundle\Entity\Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $groupe;

    /**
     * @var \SecureBundle\Entity\Menu
     *
     * @ORM\ManyToOne(targetEntity="Menu")
     * @ORM\JoinColumn(nullable=false)
     */
    private $menu;

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
     * @return GroupeMenu
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
     * Set groupe
     *
     * @param \SecureBundle\Entity\Groupe $groupe
     *
     * @return GroupeMenu
     */
    public function setGroupe(\SecureBundle\Entity\Groupe $groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return \SecureBundle\Entity\Groupe
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set menu
     *
     * @param \SecureBundle\Entity\Menu $menu
     *
     * @return GroupeMenu
     */
    public function setMenu(\SecureBundle\Entity\Menu $menu)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get menu
     *
     * @return \SecureBundle\Entity\Menu
     */
    public function getMenu()
    {
        return $this->menu;
    }
}
