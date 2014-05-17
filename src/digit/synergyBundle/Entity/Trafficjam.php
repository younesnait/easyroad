<?php

namespace digit\synergyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * trafficjam
 *
 * @ORM\Table(name="trafficjam")
 * @ORM\Entity
 */
class Trafficjam
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
     * @ORM\Column(name="startingtime", type="datetime")
     */
    private $startingtime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endingtime", type="datetime")
     */
    private $endingtime;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="largitude", type="float")
     */
    private $largitude;

	/**
     * @ORM\OneToMany(targetEntity="Image", mappedBy="trafficjam")
     */
    protected $images;
    
    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="trafficjam")
     */
    protected $comments;
    
    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="trafficjams")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    protected $user;
    
    /**
    * @ORM\ManyToOne(targetEntity="Type", inversedBy="trafficjams")
    * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
    */
    protected $type;
    
    /**
    * @ORM\ManyToOne(targetEntity="Area", inversedBy="trafficjams")
    * @ORM\JoinColumn(name="area_id", referencedColumnName="id")
    */
    protected $area;
	
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
     * @return Trafficjam
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
     * @return Trafficjam
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
     * Set startingtime
     *
     * @param \DateTime $startingtime
     * @return Trafficjam
     */
    public function setStartingtime($startingtime)
    {
        $this->startingtime = $startingtime;

        return $this;
    }

    /**
     * Get startingtime
     *
     * @return \DateTime 
     */
    public function getStartingtime()
    {
        return $this->startingtime;
    }

    /**
     * Set endingtime
     *
     * @param \DateTime $endingtime
     * @return Trafficjam
     */
    public function setEndingtime($endingtime)
    {
        $this->endingtime = $endingtime;

        return $this;
    }

    /**
     * Get endingtime
     *
     * @return \DateTime 
     */
    public function getEndingtime()
    {
        return $this->endingtime;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Trafficjam
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set largitude
     *
     * @param float $largitude
     * @return Trafficjam
     */
    public function setLargitude($largitude)
    {
        $this->largitude = $largitude;

        return $this;
    }

    /**
     * Get largitude
     *
     * @return float 
     */
    public function getLargitude()
    {
        return $this->largitude;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add images
     *
     * @param \digit\synergyBundle\Entity\Image $images
     * @return Trafficjam
     */
    public function addImage(\digit\synergyBundle\Entity\Image $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \digit\synergyBundle\Entity\Image $images
     */
    public function removeImage(\digit\synergyBundle\Entity\Image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add comments
     *
     * @param \digit\synergyBundle\Entity\Comment $comments
     * @return Trafficjam
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

    /**
     * Set user
     *
     * @param \digit\synergyBundle\Entity\User $user
     * @return Trafficjam
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
     * Set type
     *
     * @param \digit\synergyBundle\Entity\Type $type
     * @return Trafficjam
     */
    public function setType(\digit\synergyBundle\Entity\Type $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \digit\synergyBundle\Entity\Type 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set area
     *
     * @param \digit\synergyBundle\Entity\Area $area
     * @return Trafficjam
     */
    public function setArea(\digit\synergyBundle\Entity\Area $area = null)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return \digit\synergyBundle\Entity\Area 
     */
    public function getArea()
    {
        return $this->area;
    }
}
