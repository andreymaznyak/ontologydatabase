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
    private $objects;

    /**
     * @var \Meta\OntologyCreateBundle\Entity\SubjectArea
     */
    private $subjectarea;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $extansions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->objects = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add objects
     *
     * @param \Meta\OntologyCreateBundle\Entity\Object $objects
     * @return Ontology
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
     * Set subjectarea
     *
     * @param \Meta\OntologyCreateBundle\Entity\SubjectArea $subjectarea
     * @return Ontology
     */
    public function setSubjectarea(\Meta\OntologyCreateBundle\Entity\SubjectArea $subjectarea = null)
    {
        $this->subjectarea = $subjectarea;

        return $this;
    }

    /**
     * Get subjectarea
     *
     * @return \Meta\OntologyCreateBundle\Entity\SubjectArea 
     */
    public function getSubjectarea()
    {
        return $this->subjectarea;
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $includies;


    /**
     * Add includies
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $includies
     * @return Ontology
     */
    public function addIncludy(\Meta\OntologyCreateBundle\Entity\Ontology $includies)
    {
        $this->includies[] = $includies;

        return $this;
    }

    /**
     * Remove includies
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $includies
     */
    public function removeIncludy(\Meta\OntologyCreateBundle\Entity\Ontology $includies)
    {
        $this->includies->removeElement($includies);
    }

    /**
     * Get includies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIncludies()
    {
        return $this->includies;
    }
    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $lft;

    /**
     * @var integer
     */
    private $rgt;

    /**
     * @var integer
     */
    private $root;

    /**
     * @var integer
     */
    private $lvl;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $processes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $restrictions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $constants;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \Meta\OntologyCreateBundle\Entity\Ontology
     */
    private $parent;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ontologeis;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ontologeisincludies;


    /**
     * Set title
     *
     * @param string $title
     * @return Ontology
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set lft
     *
     * @param integer $lft
     * @return Ontology
     */
    public function setLft($lft)
    {
        $this->lft = $lft;

        return $this;
    }

    /**
     * Get lft
     *
     * @return integer 
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     * @return Ontology
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;

        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer 
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set root
     *
     * @param integer $root
     * @return Ontology
     */
    public function setRoot($root)
    {
        $this->root = $root;

        return $this;
    }

    /**
     * Get root
     *
     * @return integer 
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * Set lvl
     *
     * @param integer $lvl
     * @return Ontology
     */
    public function setLvl($lvl)
    {
        $this->lvl = $lvl;

        return $this;
    }

    /**
     * Get lvl
     *
     * @return integer 
     */
    public function getLvl()
    {
        return $this->lvl;
    }

    /**
     * Add processes
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyProcess $processes
     * @return Ontology
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
     * Add restrictions
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyRestriction $restrictions
     * @return Ontology
     */
    public function addRestriction(\Meta\OntologyCreateBundle\Entity\OntologyRestriction $restrictions)
    {
        $this->restrictions[] = $restrictions;

        return $this;
    }

    /**
     * Remove restrictions
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyRestriction $restrictions
     */
    public function removeRestriction(\Meta\OntologyCreateBundle\Entity\OntologyRestriction $restrictions)
    {
        $this->restrictions->removeElement($restrictions);
    }

    /**
     * Get restrictions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    /**
     * Add constants
     *
     * @param \Meta\OntologyCreateBundle\Entity\Constant $constants
     * @return Ontology
     */
    public function addConstant(\Meta\OntologyCreateBundle\Entity\Constant $constants)
    {
        $this->constants[] = $constants;

        return $this;
    }

    /**
     * Remove constants
     *
     * @param \Meta\OntologyCreateBundle\Entity\Constant $constants
     */
    public function removeConstant(\Meta\OntologyCreateBundle\Entity\Constant $constants)
    {
        $this->constants->removeElement($constants);
    }

    /**
     * Get constants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConstants()
    {
        return $this->constants;
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

    /**
     * Add ontologeis
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $ontologeis
     * @return Ontology
     */
    public function addOntologei(\Meta\OntologyCreateBundle\Entity\Ontology $ontologeis)
    {
        $this->ontologeis[] = $ontologeis;

        return $this;
    }

    /**
     * Remove ontologeis
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $ontologeis
     */
    public function removeOntologei(\Meta\OntologyCreateBundle\Entity\Ontology $ontologeis)
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
     * Add ontologeisincludies
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $ontologeisincludies
     * @return Ontology
     */
    public function addOntologeisincludy(\Meta\OntologyCreateBundle\Entity\Ontology $ontologeisincludies)
    {
        $this->ontologeisincludies[] = $ontologeisincludies;

        return $this;
    }

    /**
     * Remove ontologeisincludies
     *
     * @param \Meta\OntologyCreateBundle\Entity\Ontology $ontologeisincludies
     */
    public function removeOntologeisincludy(\Meta\OntologyCreateBundle\Entity\Ontology $ontologeisincludies)
    {
        $this->ontologeisincludies->removeElement($ontologeisincludies);
    }

    /**
     * Get ontologeisincludies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOntologeisincludies()
    {
        return $this->ontologeisincludies;
    }
}
