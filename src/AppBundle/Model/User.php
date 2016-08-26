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
     * @ORM\Column(type="string", length=50)
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
     * @ORM\Column(type="string", length=20)
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
     * @var string
     */
    protected $networkLink;

    /**
     * @var blob
     */
    protected $photo;

    /**
     * @var string
     */
    protected $h_index;

    /**
     * @var string
     */
    protected $cvPDFLink;

    /**
     * @var string
     */
    protected $cvLatexLink;

    /**
     * @var blob
     */
    protected $qrcode;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    protected $bio;

    /**
     * // TODO class sections
     * @var sections
     */
    protected $sections;

    /**
     * // TODO ???
     * publication_tab
     */
    protected $pub;

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
}
