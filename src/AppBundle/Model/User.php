<?php

namespace AppBundle\Model;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Multi Agent user
 *
 * @ORM\Entity
 * @ORM\Table(name="user")
 *
 * @author Alexandre Guyon <guyon.alex@yahoo.com>
 */
class User extends BaseUser{
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=50,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $domain = "UTBM";

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $position;

    /**
     * @var string
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $phone;

    /**
     * @var string
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $fax;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $FOAF;

    /**
     * @var link
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    protected $photo;

    /**
     * @var string
     * @ORM\Column(type="integer", length=500, nullable=true)
     */
    protected $hindex;

    /**
     * @var link
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    protected $resumePdf;

    /**
     * @var link
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    protected $resumeLatex;

    /**
     * @var link
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    protected $qrcode;

    /**
     * @var string
     * @ORM\Column(type="text", length=65537, nullable=true)
     */
    protected $page;

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return User
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return User
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set fOAF
     *
     * @param string $fOAF
     *
     * @return User
     */
    public function setFOAF($fOAF)
    {
        $this->FOAF = $fOAF;

        return $this;
    }

    /**
     * Get fOAF
     *
     * @return string
     */
    public function getFOAF()
    {
        return $this->FOAF;
    }

    /**
     * Set bio
     *
     * @param string $bio
     *
     * @return User
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set domain
     *
     * @param string $domain
     *
     * @return User
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return User
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }


    /**
     * Set resumePdf
     *
     * @param string $resumePdf
     *
     * @return User
     */
    public function setResumePdf($resumePdf)
    {
        $this->resumePdf = $resumePdf;

        return $this;
    }

    /**
     * Get resumePdf
     *
     * @return string
     */
    public function getResumePdf()
    {
        return $this->resumePdf;
    }

    /**
     * Set resumeLatex
     *
     * @param string $resumeLatex
     *
     * @return User
     */
    public function setResumeLatex($resumeLatex)
    {
        $this->resumeLatex = $resumeLatex;

        return $this;
    }

    /**
     * Get resumeLatex
     *
     * @return string
     */
    public function getResumeLatex()
    {
        return $this->resumeLatex;
    }

    /**
     * Set hindex
     *
     * @param integer $hindex
     *
     * @return User
     */
    public function setHindex($hindex)
    {
        $this->hindex = $hindex;

        return $this;
    }

    /**
     * Get hindex
     *
     * @return integer
     */
    public function getHindex()
    {
        return $this->hindex;
    }

    /**
     * Set qrcode
     *
     * @param string $qrcode
     *
     * @return User
     */
    public function setQrcode($qrcode)
    {
        $this->qrcode = $qrcode;

        return $this;
    }

    /**
     * Get qrcode
     *
     * @return string
     */
    public function getQrcode()
    {
        return $this->qrcode;
    }

    /**
     * Set page
     *
     * @param string $page
     *
     * @return User
     */
    public function setPage($page)
    {
        $this->page = $page;
    
        return $this;
    }

    /**
     * Get page
     *
     * @return string
     */
    public function getPage()
    {
        return $this->page;
    }
}
