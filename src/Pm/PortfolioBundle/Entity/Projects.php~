<?php

namespace Pm\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projects
 *
 * @ORM\Table(name="projects")
 * @ORM\Entity
 */
class Projects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="_category1", type="integer", nullable=false)
     */
    private $category1;

    /**
     * @var integer
     *
     * @ORM\Column(name="_category2", type="integer", nullable=false)
     */
    private $category2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="software", type="string", length=1000, nullable=false)
     */
    private $software;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="_thumb", type="integer", nullable=false)
     */
    private $thumb;

    /**
     * @var integer
     *
     * @ORM\Column(name="_cover", type="integer", nullable=false)
     */
    private $cover;

    /**
     * @var string
     *
     * @ORM\Column(name="excerpt", type="string", length=1000, nullable=false)
     */
    private $excerpt;



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
     * Set title
     *
     * @param string $title
     * @return Projects
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set category1
     *
     * @param integer $category1
     * @return Projects
     */
    public function setCategory1($category1)
    {
        $this->category1 = $category1;
    
        return $this;
    }

    /**
     * Get category1
     *
     * @return integer 
     */
    public function getCategory1()
    {
        return $this->category1;
    }

    /**
     * Set category2
     *
     * @param integer $category2
     * @return Projects
     */
    public function setCategory2($category2)
    {
        $this->category2 = $category2;
    
        return $this;
    }

    /**
     * Get category2
     *
     * @return integer 
     */
    public function getCategory2()
    {
        return $this->category2;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Projects
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set software
     *
     * @param string $software
     * @return Projects
     */
    public function setSoftware($software)
    {
        $this->software = $software;
    
        return $this;
    }

    /**
     * Get software
     *
     * @return string 
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Projects
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
     * Set thumb
     *
     * @param integer $thumb
     * @return Projects
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
    
        return $this;
    }

    /**
     * Get thumb
     *
     * @return integer 
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set cover
     *
     * @param integer $cover
     * @return Projects
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
    
        return $this;
    }

    /**
     * Get cover
     *
     * @return integer 
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set excerpt
     *
     * @param string $excerpt
     * @return Projects
     */
    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;
    
        return $this;
    }

    /**
     * Get excerpt
     *
     * @return string 
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }
}