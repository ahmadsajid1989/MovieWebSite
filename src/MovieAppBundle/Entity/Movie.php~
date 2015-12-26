<?php

namespace MovieAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Movie
 * @Vich\Uploadable
 */
class Movie
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
    private $release_date;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $descripton;

    /**
     * @var \DateTime
     */
    private $duration;

    /**
     * @var integer
     */
    private $views;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var string
     */
    private $award;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $url;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="movie_image", fileNameProperty="imageName")
     *
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $imageName;

    /**
     * @var string
     */
    private $publisher;

    /**
     * @var string
     */
    private $producer;

    /**
     * @var string
     */
    private $director;

    /**
     * @var string
     */
    private $cast;

    /**
     * @var string
     */
    private $file_format;

    /**
     * @var integer
     */
    private $rating;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $episodes;

    /**
     * @var \MovieAppBundle\Entity\Category
     */
    private $category;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $genre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->episodes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->genre = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Movie
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
     * Set release_date
     *
     * @param \DateTime $releaseDate
     * @return Movie
     */
    public function setReleaseDate($releaseDate)
    {
        $this->release_date = $releaseDate;

        return $this;
    }

    /**
     * Get release_date
     *
     * @return \DateTime 
     */
    public function getReleaseDate()
    {
        return $this->release_date;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Movie
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set descripton
     *
     * @param string $descripton
     * @return Movie
     */
    public function setDescripton($descripton)
    {
        $this->descripton = $descripton;

        return $this;
    }

    /**
     * Get descripton
     *
     * @return string 
     */
    public function getDescripton()
    {
        return $this->descripton;
    }

    /**
     * Set duration
     *
     * @param \DateTime $duration
     * @return Movie
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
     * Set views
     *
     * @param integer $views
     * @return Movie
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
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Movie
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Movie
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set award
     *
     * @param string $award
     * @return Movie
     */
    public function setAward($award)
    {
        $this->award = $award;

        return $this;
    }

    /**
     * Get award
     *
     * @return string 
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Movie
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Movie
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
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    }

    /**
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set publisher
     *
     * @param string $publisher
     * @return Movie
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * Get publisher
     *
     * @return string 
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Set producer
     *
     * @param string $producer
     * @return Movie
     */
    public function setProducer($producer)
    {
        $this->producer = $producer;

        return $this;
    }

    /**
     * Get producer
     *
     * @return string 
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * Set director
     *
     * @param string $director
     * @return Movie
     */
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return string 
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set cast
     *
     * @param string $cast
     * @return Movie
     */
    public function setCast($cast)
    {
        $this->cast = $cast;

        return $this;
    }

    /**
     * Get cast
     *
     * @return string 
     */
    public function getCast()
    {
        return $this->cast;
    }

    /**
     * Set file_format
     *
     * @param string $fileFormat
     * @return Movie
     */
    public function setFileFormat($fileFormat)
    {
        $this->file_format = $fileFormat;

        return $this;
    }

    /**
     * Get file_format
     *
     * @return string 
     */
    public function getFileFormat()
    {
        return $this->file_format;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     * @return Movie
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Add episodes
     *
     * @param \MovieAppBundle\Entity\Episode $episodes
     * @return Movie
     */
    public function addEpisode(\MovieAppBundle\Entity\Episode $episodes)
    {
        $this->episodes[] = $episodes;

        return $this;
    }

    /**
     * Remove episodes
     *
     * @param \MovieAppBundle\Entity\Episode $episodes
     */
    public function removeEpisode(\MovieAppBundle\Entity\Episode $episodes)
    {
        $this->episodes->removeElement($episodes);
    }

    /**
     * Get episodes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    /**
     * Set category
     *
     * @param \MovieAppBundle\Entity\Category $category
     * @return Movie
     */
    public function setCategory(\MovieAppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \MovieAppBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add tags
     *
     * @param \MovieAppBundle\Entity\Tags $tags
     * @return Movie
     */
    public function addTag(\MovieAppBundle\Entity\Tags $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \MovieAppBundle\Entity\Tags $tags
     */
    public function removeTag(\MovieAppBundle\Entity\Tags $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Add genre
     *
     * @param \MovieAppBundle\Entity\Genre $genre
     * @return Movie
     */
    public function addGenre(\MovieAppBundle\Entity\Genre $genre)
    {
        $this->genre[] = $genre;

        return $this;
    }

    /**
     * Remove genre
     *
     * @param \MovieAppBundle\Entity\Genre $genre
     */
    public function removeGenre(\MovieAppBundle\Entity\Genre $genre)
    {
        $this->genre->removeElement($genre);
    }

    /**
     * Get genre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGenre()
    {
        return $this->genre;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->created_at = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updated_at = new \DateTime();
    }

    /**
     * @param _toString
     * @return string
     *
     * It's the default to string return the content title;
     */

    public function __toString()
    {
        return $this->getTitle() ? $this->getTitle() : "";
    }
}
