<?php

namespace SecureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuDroit
 *
 * @ORM\Table(name="secure_menu_droit")
 * @ORM\Entity(repositoryClass="SecureBundle\Repository\MenuDroitRepository")
 */
class MenuDroit
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
     * @var \SecureBundle\Entity\Menu
     *
     * @ORM\ManyToOne(targetEntity="Menu")
     * @ORM\JoinColumn(nullable=false)
     */
    private $menu;

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
     * @return MenuDroit
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
     * Set menu
     *
     * @param \SecureBundle\Entity\Menu $menu
     *
     * @return MenuDroit
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

    /**
     * Set droit
     *
     * @param \SecureBundle\Entity\Droit $droit
     *
     * @return MenuDroit
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
