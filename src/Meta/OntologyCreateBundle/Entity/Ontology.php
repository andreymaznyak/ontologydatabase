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
     * @var \Doctrine\Common\Collections\Collection
     * @OneToMany(targetEntity="Ontology", mappedBy="parent")
     **/
    private $children;
    /**
     * 
     * @ManyToOne(targetEntity="Ontology", inversedBy="children")
     * @JoinColumn(name="parent_id", referencedColumnName="id")
     **/
    private $parent;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->extansions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
   

    /**
     * Add children
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $children
     * @return Ontology
     */
    public function addChild(\Meta\OntologyCreateBundle\Entity\Ontology $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $children
     */
    public function removeChild(\Meta\OntologyCreateBundle\Entity\Ontology $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $parent
     * @return Ontology
     */
    public function setParent(\Meta\OntologyCreateBundle\Entity\Ontology $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Meta\OntologyCreateBundle\Entity\Ontology 
     */
    public function getParent()
    {
        return $this->parent;
    }
}
