<?php

namespace digit\synergyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

	/**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="comments")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    protected $user;
    
    /**
    * @ORM\ManyToOne(targetEntity="Trafficjam", inversedBy="comments")
    * @ORM\JoinColumn(name="trafficjam_id", referencedColumnName="id")
    */
    protected $trafficjam;
	
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
     * @return Comment
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
     * Set description
     *
     * @param string $description
     * @return Comment
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
     * Set date
     *
     * @param \DateTime $date
     * @return Comment
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
     * Set user
     *
     * @param \digit\synergyBundle\Entity\User $user
     * @return Comment
     */
    public function setUser(\digit\synergyBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \digit\synergyBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set trafficjam
     *
     * @param \digit\synergyBundle\Entity\Trafficjam $trafficjam
     * @return Comment
     */
    public function setTrafficjam(\digit\synergyBundle\Entity\Trafficjam $trafficjam = null)
    {
        $this->trafficjam = $trafficjam;

        return $this;
    }

    /**
     * Get trafficjam
     *
     * @return \digit\synergyBundle\Entity\Trafficjam 
     */
    public function getTrafficjam()
    {
        return $this->trafficjam;
    }
}
