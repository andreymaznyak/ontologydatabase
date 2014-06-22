<?php

namespace Meta\OntologyCreateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AttributeRestriction
 */
class AttributeRestriction
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $attributties;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->attributties = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return AttributeRestriction
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return AttributeRestriction
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
     * Add attributties
     *
     * @param \Meta\OntologyCreateBundle\Entity\Attribute $attributties
     * @return AttributeRestriction
     */
    public function addAttributty(\Meta\OntologyCreateBundle\Entity\Attribute $attributties)
    {
        $this->attributties[] = $attributties;

        return $this;
    }

    /**
     * Remove attributties
     *
     * @param \Meta\OntologyCreateBundle\Entity\Attribute $attributties
     */
    public function removeAttributty(\Meta\OntologyCreateBundle\Entity\Attribute $attributties)
    {
        $this->attributties->removeElement($attributties);
    }

    /**
     * Get attributties
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAttributties()
    {
        return $this->attributties;
    }
}
