<?php

namespace Meta\OntologyCreateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OntologyRestriction
 */
class OntologyRestriction
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
     * @var \Meta\OntologyCreateBundle\Entity\Ontology
     */
    private $ontology;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $objects;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->objects = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return OntologyRestriction
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
     * @return OntologyRestriction
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
     * @return OntologyRestriction
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
     * Set ontology
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $ontology
     * @return OntologyRestriction
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

    /**
     * Add objects
     *
     * @param \Meta\OntologyCreateBundle\Entity\Object $objects
     * @return OntologyRestriction
     */
    public function addObject(\Meta\OntologyCreateBundle\Entity\Object $objects)
    {
        $this->objects[] = $objects;

        return $this;
    }

    /**
     * Remove objects
     *
     * @param \Meta\OntologyCreateBundle\Entity\Object $objects
     */
    public function removeObject(\Meta\OntologyCreateBundle\Entity\Object $objects)
    {
        $this->objects->removeElement($objects);
    }

    /**
     * Get objects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObjects()
    {
        return $this->objects;
    }
    /**
     * @var \Meta\OntologyCreateBundle\Entity\RestrictionType
     */
    private $restrictiontype;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $processes;


    /**
     * Set restrictiontype
     *
     * @param \Meta\OntologyCreateBundle\Entity\RestrictionType $restrictiontype
     * @return OntologyRestriction
     */
    public function setRestrictiontype(\Meta\OntologyCreateBundle\Entity\RestrictionType $restrictiontype = null)
    {
        $this->restrictiontype = $restrictiontype;

        return $this;
    }

    /**
     * Get restrictiontype
     *
     * @return \Meta\OntologyCreateBundle\Entity\RestrictionType 
     */
    public function getRestrictiontype()
    {
        return $this->restrictiontype;
    }

    /**
     * Add processes
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyProcess $processes
     * @return OntologyRestriction
     */
    public function addProcess(\Meta\OntologyCreateBundle\Entity\OntologyProcess $processes)
    {
        $this->processes[] = $processes;

        return $this;
    }

    /**
     * Remove processes
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyProcess $processes
     */
    public function removeProcess(\Meta\OntologyCreateBundle\Entity\OntologyProcess $processes)
    {
        $this->processes->removeElement($processes);
    }

    /**
     * Get processes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProcesses()
    {
        return $this->processes;
    }
}
