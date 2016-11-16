<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Contact
 * @ORM\Entity
 */
class Contact
{
    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="contact", cascade={"remove"})
    * @ORM\JoinColumn(name="User_id", referencedColumnName="id")
    */

    protected $user;

    /**
     * @var int
     */
    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="string")
     */
    private $string;


    /**
     * @ORM\Column(type="string")
     */

    private $telephone;

    /**
     * @var string
     */
     /**
     * @ORM\Column(type="string")
     */

    private $site;

    /**
     * @var string
     */
     /**
     * @ORM\Column(type="string")
     */

    private $adresse;

    /**
     * Set contact
     *
     * @param \Doctrine\Common\Collections\Collection $contact
     */
    public function setContact(\Doctrine\Common\Collections\Collection $contact)
    {
        $this->contact = $contact;
    }
    /**
     * Set user
     *
     * @param  user $user
     */
    public function setUser(user $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return user
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set string
     *
     * @param  string
     *
     * @return Contact
     */
    public function setString($string)
    {
        $this->string = $string;

        return $this;
    }

    /**
     * Get string
     *
     * @return Contact
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * Set telephone
     *
     * @param string telephone
     *
     * @return Contact
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set site
     *
     * @param string site
     *
     * @return Contact
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set adresse
     *
     * @param string adresse
     *
     * @return Contact
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
