<?php

namespace digit\synergyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Image
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

	/**
    * @ORM\ManyToOne(targetEntity="Trafficjam", inversedBy="images")
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
     * Set url
     *
     * @param string $url
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set trafficjam
     *
     * @param \digit\synergyBundle\Entity\Trafficjam $trafficjam
     * @return Image
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
