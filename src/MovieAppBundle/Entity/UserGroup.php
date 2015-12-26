<?php

namespace MovieAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * UserGroup
 */
class UserGroup extends BaseGroup
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $users;

    /**
     * Constructor
     */
    public function __construct($name, $roles = array())
    {
        parent::__construct($name, $roles);

        $this->users = new ArrayCollection();
    }

    /**
     * Magic to string
     * @return string
     */
    public function __toString()
    {
        return (string) $this->name;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add user
     * @param User $user
     * @return $this
     */
    public function addUser(User $user)
    {
        $this->users->add($user);
        return $this;
    }

    /**
     * Remove user
     * @param User $user
     * @return $this
     */
    public function removeUser(User $user)
    {
        $this->users->removeElement($user);
        return $this;
    }

    /**
     * Get users
     * @return User[]|ArrayCollection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
