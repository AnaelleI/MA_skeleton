<?php

namespace AppBundle\Model;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

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
     */
    protected $firstName;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    protected $lastName;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    protected $position;

    /**
     * @var string
     * @ORM\Column(type="string", length=20)
     */
    protected $phone;

    /**
     * @var string
     * @ORM\Column(type="string", length=20)
     */
    protected $fax;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
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
     * @ORM\Column(type="text")
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

    public function __construct()
    {

    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
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
}
