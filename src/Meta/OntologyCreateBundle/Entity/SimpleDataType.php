<?php

namespace Meta\OntologyCreateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SimpleDataType
 */
class SimpleDataType
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
    private $datatype;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->datatype = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return SimpleDataType
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
     * @return SimpleDataType
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
     * Add datatype
     *
     * @param \Meta\OntologyCreateBundle\Entity\DataType $datatype
     * @return SimpleDataType
     */
    public function addDatatype(\Meta\OntologyCreateBundle\Entity\DataType $datatype)
    {
        $this->datatype[] = $datatype;

        return $this;
    }

    /**
     * Remove datatype
     *
     * @param \Meta\OntologyCreateBundle\Entity\DataType $datatype
     */
    public function removeDatatype(\Meta\OntologyCreateBundle\Entity\DataType $datatype)
    {
        $this->datatype->removeElement($datatype);
    }

    /**
     * Get datatype
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDatatype()
    {
        return $this->datatype;
    }
    
    
    public function __toString() {
        return $this->name;
    }
}
