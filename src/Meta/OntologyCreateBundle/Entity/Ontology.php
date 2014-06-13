<?php

namespace Meta\OntologyCreateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ontology
 */
class Ontology
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
    private $extansions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->extansions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Ontology
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
     * @return Ontology
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
     * Add extansions
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $extansions
     * @return Ontology
     */
    public function addExtansion(\Meta\OntologyCreateBundle\Entity\Ontology $extansions)
    {
        $this->extansions[] = $extansions;

        return $this;
    }

    /**
     * Remove extansions
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $extansions
     */
    public function removeExtansion(\Meta\OntologyCreateBundle\Entity\Ontology $extansions)
    {
        $this->extansions->removeElement($extansions);
    }

    /**
     * Get extansions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExtansions()
    {
        return $this->extansions;
    }
    
    public function __toString() {
        return $this->name;
    }
   
}
