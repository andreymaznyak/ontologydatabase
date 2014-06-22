<?php

namespace Meta\OntologyCreateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RestrictionType
 */
class RestrictionType
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
    private $restrictions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->restrictions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return RestrictionType
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
     * @return RestrictionType
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
     * Add restrictions
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyRestriction $restrictions
     * @return RestrictionType
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
}
