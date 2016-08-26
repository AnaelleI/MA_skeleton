<?php

namespace AppBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Multi Agent publication
 *
 * @ORM\Entity
 * @ORM\Table(name="publication")
 *
 * @author Alexandre Guyon <guyon.alex@yahoo.com>
 */
class Publication {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=150,  nullable=true)
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(type="string", length=20,  nullable=true )
     */
    protected $authors;

    /**
     * @var string
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    protected $details;

    /**
     * @var string
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $abtract;

    /**
     * @var string
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $keywords;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $category;

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
     *
     * @return Publication
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
     * Set authors
     *
     * @param string $authors
     *
     * @return Publication
     */
    public function setAuthors($authors)
    {
        $this->authors = $authors;
    
        return $this;
    }

    /**
     * Get authors
     *
     * @return string
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Publication
     */
    public function setDetails($details)
    {
        $this->details = $details;
    
        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set abtract
     *
     * @param string $abtract
     *
     * @return Publication
     */
    public function setAbtract($abtract)
    {
        $this->abtract = $abtract;
    
        return $this;
    }

    /**
     * Get abtract
     *
     * @return string
     */
    public function getAbtract()
    {
        return $this->abtract;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return Publication
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    
        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Publication
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
}
