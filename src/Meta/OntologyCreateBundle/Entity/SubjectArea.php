<?php

namespace Meta\OntologyCreateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubjectArea
 */
class SubjectArea
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
    private $ontologyarea;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ontologyarea = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return SubjectArea
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
     * @return SubjectArea
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
     * Add ontologyarea
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $ontologyarea
     * @return SubjectArea
     */
    public function addOntologyarea(\Meta\OntologyCreateBundle\Entity\Ontology $ontologyarea)
    {
        $this->ontologyarea[] = $ontologyarea;

        return $this;
    }

    /**
     * Remove ontologyarea
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $ontologyarea
     */
    public function removeOntologyarea(\Meta\OntologyCreateBundle\Entity\Ontology $ontologyarea)
    {
        $this->ontologyarea->removeElement($ontologyarea);
    }

    /**
     * Get ontologyarea
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOntologyarea()
    {
        return $this->ontologyarea;
    }
    
    public function __toString() {
        return $this->name;
    }
}
