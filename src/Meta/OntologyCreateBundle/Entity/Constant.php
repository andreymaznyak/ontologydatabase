<?php

namespace Meta\OntologyCreateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Constant
 */
class Constant
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
     * @var string
     */
    private $value;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $datatypes;

    /**
     * @var \Meta\OntologyCreateBundle\Entity\Ontology
     */
    private $ontology;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->datatypes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Constant
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
     * @return Constant
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
     * Set value
     *
     * @param string $value
     * @return Constant
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Add datatypes
     *
     * @param \Meta\OntologyCreateBundle\Entity\DataType $datatypes
     * @return Constant
     */
    public function addDatatype(\Meta\OntologyCreateBundle\Entity\DataType $datatypes)
    {
        $this->datatypes[] = $datatypes;

        return $this;
    }

    /**
     * Remove datatypes
     *
     * @param \Meta\OntologyCreateBundle\Entity\DataType $datatypes
     */
    public function removeDatatype(\Meta\OntologyCreateBundle\Entity\DataType $datatypes)
    {
        $this->datatypes->removeElement($datatypes);
    }

    /**
     * Get datatypes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDatatypes()
    {
        return $this->datatypes;
    }

    /**
     * Set ontology
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $ontology
     * @return Constant
     */
    public function setOntology(\Meta\OntologyCreateBundle\Entity\Ontology $ontology = null)
    {
        $this->ontology = $ontology;

        return $this;
    }

    /**
     * Get ontology
     *
     * @return \Meta\OntologyCreateBundle\Entity\Ontology 
     */
    public function getOntology()
    {
        return $this->ontology;
    }
}
