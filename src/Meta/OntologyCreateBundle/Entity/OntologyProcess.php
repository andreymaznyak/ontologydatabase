<?php

namespace Meta\OntologyCreateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OntologyProcess
 */
class OntologyProcess
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
    private $algorithm;

    /**
     * @var integer
     */
    private $period;

    /**
     * @var string
     */
    private $periodtype;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $datatypes;

    /**
     * @var \Meta\OntologyCreateBundle\Entity\Ontology
     */
    private $ontology;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $starttrigger;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->datatypes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->starttrigger = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return OntologyProcess
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
     * @return OntologyProcess
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
     * Set algorithm
     *
     * @param string $algorithm
     * @return OntologyProcess
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;

        return $this;
    }

    /**
     * Get algorithm
     *
     * @return string 
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Set period
     *
     * @param integer $period
     * @return OntologyProcess
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return integer 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set periodtype
     *
     * @param string $periodtype
     * @return OntologyProcess
     */
    public function setPeriodtype($periodtype)
    {
        $this->periodtype = $periodtype;

        return $this;
    }

    /**
     * Get periodtype
     *
     * @return string 
     */
    public function getPeriodtype()
    {
        return $this->periodtype;
    }

    /**
     * Add datatypes
     *
     * @param \Meta\OntologyCreateBundle\Entity\DataType $datatypes
     * @return OntologyProcess
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
     * @return OntologyProcess
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
     * Add starttrigger
     *
     * @param \Meta\OntologyCreateBundle\Entity\Trigger $starttrigger
     * @return OntologyProcess
     */
    public function addStarttrigger(\Meta\OntologyCreateBundle\Entity\Trigger $starttrigger)
    {
        $this->starttrigger[] = $starttrigger;

        return $this;
    }

    /**
     * Remove starttrigger
     *
     * @param \Meta\OntologyCreateBundle\Entity\Trigger $starttrigger
     */
    public function removeStarttrigger(\Meta\OntologyCreateBundle\Entity\Trigger $starttrigger)
    {
        $this->starttrigger->removeElement($starttrigger);
    }

    /**
     * Get starttrigger
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStarttrigger()
    {
        return $this->starttrigger;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $datatypesinprocess;


    /**
     * Add datatypesinprocess
     *
     * @param \Meta\OntologyCreateBundle\Entity\DataType $datatypesinprocess
     * @return OntologyProcess
     */
    public function addDatatypesinprocess(\Meta\OntologyCreateBundle\Entity\DataType $datatypesinprocess)
    {
        $this->datatypesinprocess[] = $datatypesinprocess;

        return $this;
    }

    /**
     * Remove datatypesinprocess
     *
     * @param \Meta\OntologyCreateBundle\Entity\DataType $datatypesinprocess
     */
    public function removeDatatypesinprocess(\Meta\OntologyCreateBundle\Entity\DataType $datatypesinprocess)
    {
        $this->datatypesinprocess->removeElement($datatypesinprocess);
    }

    /**
     * Get datatypesinprocess
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDatatypesinprocess()
    {
        return $this->datatypesinprocess;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $stoptrigger;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $objects;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $extansions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ontologeis;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ontologyrestrictions;


    /**
     * Add stoptrigger
     *
     * @param \Meta\OntologyCreateBundle\Entity\Trigger $stoptrigger
     * @return OntologyProcess
     */
    public function addStoptrigger(\Meta\OntologyCreateBundle\Entity\Trigger $stoptrigger)
    {
        $this->stoptrigger[] = $stoptrigger;

        return $this;
    }

    /**
     * Remove stoptrigger
     *
     * @param \Meta\OntologyCreateBundle\Entity\Trigger $stoptrigger
     */
    public function removeStoptrigger(\Meta\OntologyCreateBundle\Entity\Trigger $stoptrigger)
    {
        $this->stoptrigger->removeElement($stoptrigger);
    }

    /**
     * Get stoptrigger
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStoptrigger()
    {
        return $this->stoptrigger;
    }

    /**
     * Add objects
     *
     * @param \Meta\OntologyCreateBundle\Entity\Object $objects
     * @return OntologyProcess
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
     * Add extansions
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyProcess $extansions
     * @return OntologyProcess
     */
    public function addExtansion(\Meta\OntologyCreateBundle\Entity\OntologyProcess $extansions)
    {
        $this->extansions[] = $extansions;

        return $this;
    }

    /**
     * Remove extansions
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyProcess $extansions
     */
    public function removeExtansion(\Meta\OntologyCreateBundle\Entity\OntologyProcess $extansions)
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

    /**
     * Add ontologeis
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyProcess $ontologeis
     * @return OntologyProcess
     */
    public function addOntologei(\Meta\OntologyCreateBundle\Entity\OntologyProcess $ontologeis)
    {
        $this->ontologeis[] = $ontologeis;

        return $this;
    }

    /**
     * Remove ontologeis
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyProcess $ontologeis
     */
    public function removeOntologei(\Meta\OntologyCreateBundle\Entity\OntologyProcess $ontologeis)
    {
        $this->ontologeis->removeElement($ontologeis);
    }

    /**
     * Get ontologeis
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOntologeis()
    {
        return $this->ontologeis;
    }

    /**
     * Add ontologyrestrictions
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyRestriction $ontologyrestrictions
     * @return OntologyProcess
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
}
