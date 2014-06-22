<?php

namespace Meta\OntologyCreateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjectRelations
 */
class ObjectRelations
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
    private $type;

    /**
     * @var \Meta\OntologyCreateBundle\Entity\Object
     */
    private $firstobject;

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
     * @return ObjectRelations
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
     * @return ObjectRelations
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
     * Set type
     *
     * @param string $type
     * @return ObjectRelations
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set firstobject
     *
     * @param \Meta\OntologyCreateBundle\Entity\Object $firstobject
     * @return ObjectRelations
     */
    public function setFirstobject(\Meta\OntologyCreateBundle\Entity\Object $firstobject = null)
    {
        $this->firstobject = $firstobject;

        return $this;
    }

    /**
     * Get firstobject
     *
     * @return \Meta\OntologyCreateBundle\Entity\Object 
     */
    public function getFirstobject()
    {
        return $this->firstobject;
    }

    /**
     * Set object
     *
     * @param \Meta\OntologyCreateBundle\Entity\Object $object
     * @return ObjectRelations
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
}
