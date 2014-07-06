<?php

namespace Meta\ClassificationLegalEntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LegalEntity
 */
class LegalEntity
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
     * @var \Meta\ClassificationLegalEntitiesBundle\Entity\PurposeActivity
     */
    private $purposeactivity;

    /**
     * @var \Meta\ClassificationLegalEntitiesBundle\Entity\OwnershipForm
     */
    private $ownershipform;

    /**
     * @var \Meta\ClassificationLegalEntitiesBundle\Entity\Participants
     */
    private $participants;

    /**
     * @var \Meta\ClassificationLegalEntitiesBundle\Entity\VolumesLiability
     */
    private $volumesliability;

    /**
     * @var \Meta\ClassificationLegalEntitiesBundle\Entity\VolumesRightsParticipants
     */
    private $volumerigthparticip;


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
     * @return LegalEntity
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
     * Set purposeactivity
     *
     * @param \Meta\ClassificationLegalEntitiesBundle\Entity\PurposeActivity $purposeactivity
     * @return LegalEntity
     */
    public function setPurposeactivity(\Meta\ClassificationLegalEntitiesBundle\Entity\PurposeActivity $purposeactivity = null)
    {
        $this->purposeactivity = $purposeactivity;

        return $this;
    }

    /**
     * Get purposeactivity
     *
     * @return \Meta\ClassificationLegalEntitiesBundle\Entity\PurposeActivity 
     */
    public function getPurposeactivity()
    {
        return $this->purposeactivity;
    }

    /**
     * Set ownershipform
     *
     * @param \Meta\ClassificationLegalEntitiesBundle\Entity\OwnershipForm $ownershipform
     * @return LegalEntity
     */
    public function setOwnershipform(\Meta\ClassificationLegalEntitiesBundle\Entity\OwnershipForm $ownershipform = null)
    {
        $this->ownershipform = $ownershipform;

        return $this;
    }

    /**
     * Get ownershipform
     *
     * @return \Meta\ClassificationLegalEntitiesBundle\Entity\OwnershipForm 
     */
    public function getOwnershipform()
    {
        return $this->ownershipform;
    }

    /**
     * Set participants
     *
     * @param \Meta\ClassificationLegalEntitiesBundle\Entity\Participants $participants
     * @return LegalEntity
     */
    public function setParticipants(\Meta\ClassificationLegalEntitiesBundle\Entity\Participants $participants = null)
    {
        $this->participants = $participants;

        return $this;
    }

    /**
     * Get participants
     *
     * @return \Meta\ClassificationLegalEntitiesBundle\Entity\Participants 
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * Set volumesliability
     *
     * @param \Meta\ClassificationLegalEntitiesBundle\Entity\VolumesLiability $volumesliability
     * @return LegalEntity
     */
    public function setVolumesliability(\Meta\ClassificationLegalEntitiesBundle\Entity\VolumesLiability $volumesliability = null)
    {
        $this->volumesliability = $volumesliability;

        return $this;
    }

    /**
     * Get volumesliability
     *
     * @return \Meta\ClassificationLegalEntitiesBundle\Entity\VolumesLiability 
     */
    public function getVolumesliability()
    {
        return $this->volumesliability;
    }

    /**
     * Set volumerigthparticip
     *
     * @param \Meta\ClassificationLegalEntitiesBundle\Entity\VolumesRightsParticipants $volumerigthparticip
     * @return LegalEntity
     */
    public function setVolumerigthparticip(\Meta\ClassificationLegalEntitiesBundle\Entity\VolumesRightsParticipants $volumerigthparticip = null)
    {
        $this->volumerigthparticip = $volumerigthparticip;

        return $this;
    }

    /**
     * Get volumerigthparticip
     *
     * @return \Meta\ClassificationLegalEntitiesBundle\Entity\VolumesRightsParticipants 
     */
    public function getVolumerigthparticip()
    {
        return $this->volumerigthparticip;
    }
    public function __toString() {
        return $this->name;
    }
}
