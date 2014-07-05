<?php

namespace Meta\OntologyCreateBundle\Entity;

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
     * @var \Meta\OntologyCreateBundle\Entity\PurposeActivity
     */
    private $purposeactivity;

    /**
     * @var \Meta\OntologyCreateBundle\Entity\OwnershipForm
     */
    private $ownershipform;

    /**
     * @var \Meta\OntologyCreateBundle\Entity\Participants
     */
    private $participants;

    /**
     * @var \Meta\OntologyCreateBundle\Entity\VolumesLiability
     */
    private $volumesliability;

    /**
     * @var \Meta\OntologyCreateBundle\Entity\VolumesRightsParticipants
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
     * @param \Meta\OntologyCreateBundle\Entity\PurposeActivity $purposeactivity
     * @return LegalEntity
     */
    public function setPurposeactivity(\Meta\OntologyCreateBundle\Entity\PurposeActivity $purposeactivity = null)
    {
        $this->purposeactivity = $purposeactivity;

        return $this;
    }

    /**
     * Get purposeactivity
     *
     * @return \Meta\OntologyCreateBundle\Entity\PurposeActivity 
     */
    public function getPurposeactivity()
    {
        return $this->purposeactivity;
    }

    /**
     * Set ownershipform
     *
     * @param \Meta\OntologyCreateBundle\Entity\OwnershipForm $ownershipform
     * @return LegalEntity
     */
    public function setOwnershipform(\Meta\OntologyCreateBundle\Entity\OwnershipForm $ownershipform = null)
    {
        $this->ownershipform = $ownershipform;

        return $this;
    }

    /**
     * Get ownershipform
     *
     * @return \Meta\OntologyCreateBundle\Entity\OwnershipForm 
     */
    public function getOwnershipform()
    {
        return $this->ownershipform;
    }

    /**
     * Set participants
     *
     * @param \Meta\OntologyCreateBundle\Entity\Participants $participants
     * @return LegalEntity
     */
    public function setParticipants(\Meta\OntologyCreateBundle\Entity\Participants $participants = null)
    {
        $this->participants = $participants;

        return $this;
    }

    /**
     * Get participants
     *
     * @return \Meta\OntologyCreateBundle\Entity\Participants 
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * Set volumesliability
     *
     * @param \Meta\OntologyCreateBundle\Entity\VolumesLiability $volumesliability
     * @return LegalEntity
     */
    public function setVolumesliability(\Meta\OntologyCreateBundle\Entity\VolumesLiability $volumesliability = null)
    {
        $this->volumesliability = $volumesliability;

        return $this;
    }

    /**
     * Get volumesliability
     *
     * @return \Meta\OntologyCreateBundle\Entity\VolumesLiability 
     */
    public function getVolumesliability()
    {
        return $this->volumesliability;
    }

    /**
     * Set volumerigthparticip
     *
     * @param \Meta\OntologyCreateBundle\Entity\VolumesRightsParticipants $volumerigthparticip
     * @return LegalEntity
     */
    public function setVolumerigthparticip(\Meta\OntologyCreateBundle\Entity\VolumesRightsParticipants $volumerigthparticip = null)
    {
        $this->volumerigthparticip = $volumerigthparticip;

        return $this;
    }

    /**
     * Get volumerigthparticip
     *
     * @return \Meta\OntologyCreateBundle\Entity\VolumesRightsParticipants 
     */
    public function getVolumerigthparticip()
    {
        return $this->volumerigthparticip;
    }
    public function __toString() {
        return $this->name;
    }
}
