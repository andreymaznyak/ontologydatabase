<?php

namespace Meta\OntologyCreateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Object
 */
class Object
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
     * @var integer
     */
    private $timestore;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $attributties;

    /**
     * @var \Meta\OntologyCreateBundle\Entity\Ontology
     */
    private $ontology;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $processes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->attributties = new \Doctrine\Common\Collections\ArrayCollection();
        $this->processes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Object
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
     * @return Object
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
     * Set timestore
     *
     * @param integer $timestore
     * @return Object
     */
    public function setTimestore($timestore)
    {
        $this->timestore = $timestore;

        return $this;
    }

    /**
     * Get timestore
     *
     * @return integer 
     */
    public function getTimestore()
    {
        return $this->timestore;
    }

    /**
     * Add attributties
     *
     * @param \Meta\OntologyCreateBundle\Entity\Attribute $attributties
     * @return Object
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

    /**
     * Set ontology
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $ontology
     * @return Object
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
     * Add processes
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyProcess $processes
     * @return Object
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $datatypes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ontologyrestrictions;


    /**
     * Add datatypes
     *
     * @param \Meta\OntologyCreateBundle\Entity\DataType $datatypes
     * @return Object
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
     * Add ontologyrestrictions
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyRestriction $ontologyrestrictions
     * @return Object
     */
    public function addOntologyrestriction(\Meta\OntologyCreateBundle\Entity\OntologyRestriction $ontologyrestrictions)
    {
        $this->ontologyrestrictions[] = $ontologyrestrictions;

        return $this;
    }

    /**
     * Remove ontologyrestrictions
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyRestriction $ontologyrestrictions
     */
    public function removeOntologyrestriction(\Meta\OntologyCreateBundle\Entity\OntologyRestriction $ontologyrestrictions)
    {
        $this->ontologyrestrictions->removeElement($ontologyrestrictions);
    }

    /**
     * Get ontologyrestrictions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOntologyrestrictions()
    {
        return $this->ontologyrestrictions;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $firstrelation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $relation;


    /**
     * Add firstrelation
     *
     * @param \Meta\OntologyCreateBundle\Entity\ObjectRelations $firstrelation
     * @return Object
     */
    public function addFirstrelation(\Meta\OntologyCreateBundle\Entity\ObjectRelations $firstrelation)
    {
        $this->firstrelation[] = $firstrelation;

        return $this;
    }

    /**
     * Remove firstrelation
     *
     * @param \Meta\OntologyCreateBundle\Entity\ObjectRelations $firstrelation
     */
    public function removeFirstrelation(\Meta\OntologyCreateBundle\Entity\ObjectRelations $firstrelation)
    {
        $this->firstrelation->removeElement($firstrelation);
    }

    /**
     * Get firstrelation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFirstrelation()
    {
        return $this->firstrelation;
    }

    /**
     * Add relation
     *
     * @param \Meta\OntologyCreateBundle\Entity\ObjectRelations $relation
     * @return Object
     */
    public function addRelation(\Meta\OntologyCreateBundle\Entity\ObjectRelations $relation)
    {
        $this->relation[] = $relation;

        return $this;
    }

    /**
     * Remove relation
     *
     * @param \Meta\OntologyCreateBundle\Entity\ObjectRelations $relation
     */
    public function removeRelation(\Meta\OntologyCreateBundle\Entity\ObjectRelations $relation)
    {
        $this->relation->removeElement($relation);
    }

    /**
     * Get relation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRelation()
    {
        return $this->relation;
    }
    
    
    public function __toString() {
        return $this->name;
    }
}
