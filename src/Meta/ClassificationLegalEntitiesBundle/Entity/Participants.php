<?php

namespace Meta\ClassificationLegalEntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participants
 */
class Participants
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
     * @return Participants
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
     * @param \Meta\ClassificationLegalEntitiesBundle\Entity\LegalEntity $legalentities
     * @return Participants
     */
    public function addLegalentity(\Meta\ClassificationLegalEntitiesBundle\Entity\LegalEntity $legalentities)
    {
        $this->legalentities[] = $legalentities;

        return $this;
    }

    /**
     * Remove legalentities
     *
     * @param \Meta\ClassificationLegalEntitiesBundle\Entity\LegalEntity $legalentities
     */
    public function removeLegalentity(\Meta\ClassificationLegalEntitiesBundle\Entity\LegalEntity $legalentities)
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
