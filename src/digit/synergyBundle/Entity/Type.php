<?php

namespace digit\synergyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Type
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

	/**
     * @ORM\OneToMany(targetEntity="Trafficjam", mappedBy="type")
     */
    protected $trafficjams;
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
     * Set type
     *
     * @param string $type
     * @return Type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->trafficjams = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add trafficjams
     *
     * @param \digit\synergyBundle\Entity\Trafficjam $trafficjams
     * @return Type
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
}
