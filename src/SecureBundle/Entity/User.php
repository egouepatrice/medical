<?php

namespace SecureBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="secure_user")
 * @ORM\Entity(repositoryClass="SecureBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\OneToMany(targetEntity="UserGroupe", mappedBy="user")
    */
    private $groupeusers;

    /**
    * @ORM\OneToMany(targetEntity="GroupeMenu", mappedBy="user")
    */
    private $menuusers;


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
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->groupeusers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->menuusers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add groupeuser
     *
     * @param \SecureBundle\Entity\UserGroupe $groupeuser
     *
     * @return User
     */
    public function addGroupeuser(\SecureBundle\Entity\UserGroupe $groupeuser)
    {
        $this->groupeusers[] = $groupeuser;

        return $this;
    }

    /**
     * Remove groupeuser
     *
     * @param \SecureBundle\Entity\UserGroupe $groupeuser
     */
    public function removeGroupeuser(\SecureBundle\Entity\UserGroupe $groupeuser)
    {
        $this->groupeusers->removeElement($groupeuser);
    }

    /**
     * Get groupeusers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupeusers()
    {
        return $this->groupeusers;
    }

    /**
     * Add menuuser
     *
     * @param \SecureBundle\Entity\GroupeMenu $menuuser
     *
     * @return User
     */
    public function addMenuuser(\SecureBundle\Entity\GroupeMenu $menuuser)
    {
        $this->menuusers[] = $menuuser;

        return $this;
    }

    /**
     * Remove menuuser
     *
     * @param \SecureBundle\Entity\GroupeMenu $menuuser
     */
    public function removeMenuuser(\SecureBundle\Entity\GroupeMenu $menuuser)
    {
        $this->menuusers->removeElement($menuuser);
    }

    /**
     * Get menuusers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMenuusers()
    {
        return $this->menuusers;
    }
}
