<?php


namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Appbundle\Entity\Contact;
use Appbundle\Entity\User;

/**
 * @ORM\Table(name="`user`")
 * @ORM\Entity
 */

class User extends BaseUser
{
     /**
     * @ORM\OneToMany(targetEntity="Contact", mappedBy="User")
     */
     protected $contacts;

     /**
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    public function __construct()
    {
        parent::__construct();
        $this->contacts = new \Doctrine\Common\Collections\ArrayCollection();

    }
    /**
     * Set contact
     *
     * @return contact
     */
    public function setContact(contact $contacts)
     {
       $contact = new Contact();
       $contact->setString($contacts->getString());
       $contact->setTelephone($contacts->getTelephone());
       $contact->setSite($contacts->getSite());
       $contact->setAdresse($contacts->getAdresse());
       $this->contact = $contact;
       var_dump($this->contact);
      //  var_dump($contacts->getString(),$contacts->getAdresse(),$contacts->getSite(),$contacts->getTelephone());
       return $contact;
     }
     /**
     * Add contacts
     *
     * @param contact $comments
     */
      public function addContact(contact $contact)
      {
          $this->contacts[] = $contact;
      }
     /**
      * Get contact
      *
      * @return contact
      */
     public function getContact()
     {
       return $this->contacts;
     }

}
