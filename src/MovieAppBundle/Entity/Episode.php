<?php

namespace MovieAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episode
 */
class Episode
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
     * @var \DateTime
     */
    private $duration;

    /**
     * @var string
     */
    private $sequence_count;

    /**
     * @var integer
     */
    private $views;

    /**
     * @var \MovieAppBundle\Entity\Movie
     */
    private $movie;


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
     * @return Episode
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
     * Set duration
     *
     * @param \DateTime $duration
     * @return Episode
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return \DateTime 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set sequence_count
     *
     * @param string $sequenceCount
     * @return Episode
     */
    public function setSequenceCount($sequenceCount)
    {
        $this->sequence_count = $sequenceCount;

        return $this;
    }

    /**
     * Get sequence_count
     *
     * @return string 
     */
    public function getSequenceCount()
    {
        return $this->sequence_count;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return Episode
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set movie
     *
     * @param \MovieAppBundle\Entity\Movie $movie
     * @return Episode
     */
    public function setMovie(\MovieAppBundle\Entity\Movie $movie = null)
    {
        $this->movie = $movie;

        return $this;
    }

    /**
     * Get movie
     *
     * @return \MovieAppBundle\Entity\Movie 
     */
    public function getMovie()
    {
        return $this->movie;
    }
}
