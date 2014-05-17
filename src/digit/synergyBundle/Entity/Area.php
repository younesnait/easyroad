<?php

namespace digit\synergyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Area
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
     * @ORM\Column(name="area", type="string", length=255)
     */
    private $area;

	/**
     * @ORM\OneToMany(targetEntity="Trafficjam", mappedBy="area")
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
     * Set area
     *
     * @param string $area
     * @return Area
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
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
     * @return Area
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
