<?php

namespace Meta\OntologyCreateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PurposeActivity
 */
class PurposeActivity
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $legalentities;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->legalentities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return PurposeActivity
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
     * Add legalentities
     *
     * @param \Meta\OntologyCreateBundle\Entity\LegalEntity $legalentities
     * @return PurposeActivity
     */
    public function addLegalentity(\Meta\OntologyCreateBundle\Entity\LegalEntity $legalentities)
    {
        $this->legalentities[] = $legalentities;

        return $this;
    }

    /**
     * Remove legalentities
     *
     * @param \Meta\OntologyCreateBundle\Entity\LegalEntity $legalentities
     */
    public function removeLegalentity(\Meta\OntologyCreateBundle\Entity\LegalEntity $legalentities)
    {
        $this->legalentities->removeElement($legalentities);
    }

    /**
     * Get legalentities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLegalentities()
    {
        return $this->legalentities;
    }
    
    public function __toString() {
        return $this->name;
    }
}
