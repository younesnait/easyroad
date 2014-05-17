<?php
// src/Sdz/UserBundle/Entity/User.php

namespace digit\synergyBundle\Entity;



use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="digit_user")
 */

 
class User extends BaseUser
{
    


    /**
    * @ORM\OneToMany(targetEntity="digit\synergyBundle\Entity\Traffic_jam")
    */

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
 
    /** @ORM\Column(name="facebook_id", type="string", length=255, nullable=true) */
    protected $facebook_id;
 
    /** @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true) */
    protected $facebook_access_token;
 
    /** @ORM\Column(name="google_id", type="string", length=255, nullable=true) */
    protected $google_id;
 
    /** @ORM\Column(name="google_access_token", type="string", length=255, nullable=true) */
    protected $google_access_token;
    
     /**
     * @ORM\OneToMany(targetEntity="Trafficjam", mappedBy="user")
     */
    protected $trafficjams;
    
    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="user")
     */
    protected $comments;

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
     * Set facebook_id
     *
     * @param string $facebookId
     * @return User
     */
    public function setFacebookId($facebookId)
    {
        $this->facebook_id = $facebookId;

        return $this;
    }

    /**
     * Get facebook_id
     *
     * @return string 
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * Set facebook_access_token
     *
     * @param string $facebookAccessToken
     * @return User
     */
    public function setFacebookAccessToken($facebookAccessToken)
    {
        $this->facebook_access_token = $facebookAccessToken;

        return $this;
    }

    /**
     * Get facebook_access_token
     *
     * @return string 
     */
    public function getFacebookAccessToken()
    {
        return $this->facebook_access_token;
    }

    /**
     * Set google_id
     *
     * @param string $googleId
     * @return User
     */
    public function setGoogleId($googleId)
    {
        $this->google_id = $googleId;

        return $this;
    }

    /**
     * Get google_id
     *
     * @return string 
     */
    public function getGoogleId()
    {
        return $this->google_id;
    }

    /**
     * Set google_access_token
     *
     * @param string $googleAccessToken
     * @return User
     */
    public function setGoogleAccessToken($googleAccessToken)
    {
        $this->google_access_token = $googleAccessToken;

        return $this;
    }

    /**
     * Get google_access_token
     *
     * @return string 
     */
    public function getGoogleAccessToken()
    {
        return $this->google_access_token;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->trafficjams = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add trafficjams
     *
     * @param \digit\synergyBundle\Entity\Trafficjam $trafficjams
     * @return User
     */
    public function addTrafficjam(\digit\synergyBundle\Entity\Trafficjam $trafficjams)
    {
        $this->trafficjams[] = $trafficjams;

        return $this;
    }

    /**
     * Remove trafficjams
     *
     * @param \digit\synergyBundle\Entity\Trafficjam $trafficjams
     */
    public function removeTrafficjam(\digit\synergyBundle\Entity\Trafficjam $trafficjams)
    {
        $this->trafficjams->removeElement($trafficjams);
    }

    /**
     * Get trafficjams
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTrafficjams()
    {
        return $this->trafficjams;
    }

    /**
     * Add comments
     *
     * @param \digit\synergyBundle\Entity\Comment $comments
     * @return User
     */
    public function addComment(\digit\synergyBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \digit\synergyBundle\Entity\Comment $comments
     */
    public function removeComment(\digit\synergyBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
}
