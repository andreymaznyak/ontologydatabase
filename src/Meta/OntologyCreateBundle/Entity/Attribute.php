<?php

namespace Meta\OntologyCreateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attribute
 */
class Attribute
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
     * @var \Meta\OntologyCreateBundle\Entity\Object
     */
    private $object;


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
     * @return Attribute
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
     * @return Attribute
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
     * @return Attribute
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
     * Set object
     *
     * @param \Meta\OntologyCreateBundle\Entity\Object $object
     * @return Attribute
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
     * @var \Meta\OntologyCreateBundle\Entity\DataType
     */
    private $attributedatatype;

    /**
     * @var \Meta\OntologyCreateBundle\Entity\AttributeRestriction
     */
    private $attributerestriction;


    /**
     * Set attributedatatype
     *
     * @param \Meta\OntologyCreateBundle\Entity\DataType $attributedatatype
     * @return Attribute
     */
    public function setAttributedatatype(\Meta\OntologyCreateBundle\Entity\DataType $attributedatatype = null)
    {
        $this->attributedatatype = $attributedatatype;

        return $this;
    }

    /**
     * Get attributedatatype
     *
     * @return \Meta\OntologyCreateBundle\Entity\DataType 
     */
    public function getAttributedatatype()
    {
        return $this->attributedatatype;
    }

    /**
     * Set attributerestriction
     *
     * @param \Meta\OntologyCreateBundle\Entity\AttributeRestriction $attributerestriction
     * @return Attribute
     */
    public function setAttributerestriction(\Meta\OntologyCreateBundle\Entity\AttributeRestriction $attributerestriction = null)
    {
        $this->attributerestriction = $attributerestriction;

        return $this;
    }

    /**
     * Get attributerestriction
     *
     * @return \Meta\OntologyCreateBundle\Entity\AttributeRestriction 
     */
    public function getAttributerestriction()
    {
        return $this->attributerestriction;
    }
    
    public function __toString() {
        return $this->name;
    }
}
