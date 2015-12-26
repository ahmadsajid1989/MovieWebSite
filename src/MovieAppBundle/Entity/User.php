<?php

namespace MovieAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\GroupInterface;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var UserGroup[]|ArrayCollection
     */
    protected $groups;


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
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->roles = array('ROLE_USER');
        $this->groups     = new ArrayCollection();
    }

    /**
     * Add group
     * @param GroupInterface $group
     * @return $this
     */

    public function addGroup(GroupInterface $group)
    {
        $this->groups->add($group);
        return $this;
    }

    /**
     * Remove groups
     *
     * @param \MovieAppBundle\Entity\UserGroup $groups
     */
    public function removeGroup(GroupInterface $group)
    {
        $this->groups->removeElement($group);
        return $this;
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
    }
}
