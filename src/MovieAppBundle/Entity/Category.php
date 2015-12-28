<?php

namespace MovieAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $movies;



    /*
     * @var boolean
     */

    private $menu;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->movies = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Category
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
     * Set slug
     *
     * @param string $slug
     * @return Category
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Add movies
     *
     * @param \MovieAppBundle\Entity\Movie $movies
     * @return Category
     */
    public function addMovie(\MovieAppBundle\Entity\Movie $movies)
    {
        $this->movies[] = $movies;

        return $this;
    }

    /**
     * Remove movies
     *
     * @param \MovieAppBundle\Entity\Movie $movies
     */
    public function removeMovie(\MovieAppBundle\Entity\Movie $movies)
    {
        $this->movies->removeElement($movies);
    }

    /**
     * Get movies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMovies()
    {
        return $this->movies;
    }

    /**
     * @param _toString
     * @return string
     *
     * It's the default to string return the content title;
     */

    public function __toString()
    {
        return $this->getName() ? $this->getName() : "";
    }



    /**
     * @param $menu
     * @return mixed
     */
    public function setMenu($menu){

       return $this->menu = $menu;
   }

    /**
     * @return mixed
     */
    public function getMenu(){

        return $this->menu;
    }


}
