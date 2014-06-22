<?php

namespace Meta\OntologyCreateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DataType
 */
class DataType
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
     * @var \Meta\OntologyCreateBundle\Entity\SimpleDataType
     */
    private $simpledatatype;

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
     * @return DataType
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
     * @return DataType
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
     * @return DataType
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
     * Set simpledatatype
     *
     * @param \Meta\OntologyCreateBundle\Entity\SimpleDataType $simpledatatype
     * @return DataType
     */
    public function setSimpledatatype(\Meta\OntologyCreateBundle\Entity\SimpleDataType $simpledatatype = null)
    {
        $this->simpledatatype = $simpledatatype;

        return $this;
    }

    /**
     * Get simpledatatype
     *
     * @return \Meta\OntologyCreateBundle\Entity\SimpleDataType 
     */
    public function getSimpledatatype()
    {
        return $this->simpledatatype;
    }
    /**
     * @var \Meta\OntologyCreateBundle\Entity\OntologyProcess
     */
    private $ontologyprocess;


    /**
     * Set ontologyprocess
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyProcess $ontologyprocess
     * @return DataType
     */
    public function setOntologyprocess(\Meta\OntologyCreateBundle\Entity\OntologyProcess $ontologyprocess = null)
    {
        $this->ontologyprocess = $ontologyprocess;

        return $this;
    }

    /**
     * Get ontologyprocess
     *
     * @return \Meta\OntologyCreateBundle\Entity\OntologyProcess 
     */
    public function getOntologyprocess()
    {
        return $this->ontologyprocess;
    }
    /**
     * @var \Meta\OntologyCreateBundle\Entity\Object
     */
    private $object;


    /**
     * Set object
     *
     * @param \Meta\OntologyCreateBundle\Entity\Object $object
     * @return DataType
     */
    public function setObject(\Meta\OntologyCreateBundle\Entity\Object $object = null)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return \Meta\OntologyCreateBundle\Entity\Object 
     */
    public function getObject()
    {
        return $this->object;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \Meta\OntologyCreateBundle\Entity\Constant
     */
    private $constant;

    /**
     * @var \Meta\OntologyCreateBundle\Entity\DataType
     */
    private $parent;


    /**
     * Add children
     *
     * @param \Meta\OntologyCreateBundle\Entity\DataType $children
     * @return DataType
     */
    public function addChild(\Meta\OntologyCreateBundle\Entity\DataType $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \Meta\OntologyCreateBundle\Entity\DataType $children
     */
    public function removeChild(\Meta\OntologyCreateBundle\Entity\DataType $children)
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
     * Set constant
     *
     * @param \Meta\OntologyCreateBundle\Entity\Constant $constant
     * @return DataType
     */
    public function setConstant(\Meta\OntologyCreateBundle\Entity\Constant $constant = null)
    {
        $this->constant = $constant;

        return $this;
    }

    /**
     * Get constant
     *
     * @return \Meta\OntologyCreateBundle\Entity\Constant 
     */
    public function getConstant()
    {
        return $this->constant;
    }

    /**
     * Set parent
     *
     * @param \Meta\OntologyCreateBundle\Entity\DataType $parent
     * @return DataType
     */
    public function setParent(\Meta\OntologyCreateBundle\Entity\DataType $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Meta\OntologyCreateBundle\Entity\DataType 
     */
    public function getParent()
    {
        return $this->parent;
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
     * @var boolean
     */
    private $iscompositedatatype;


    /**
     * Set title
     *
     * @param string $title
     * @return DataType
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
     * @return DataType
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
     * @return DataType
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
     * @return DataType
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
     * @return DataType
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
     * Set iscompositedatatype
     *
     * @param boolean $iscompositedatatype
     * @return DataType
     */
    public function setIscompositedatatype($iscompositedatatype)
    {
        $this->iscompositedatatype = $iscompositedatatype;

        return $this;
    }

    /**
     * Get iscompositedatatype
     *
     * @return boolean 
     */
    public function getIscompositedatatype()
    {
        return $this->iscompositedatatype;
    }
}
