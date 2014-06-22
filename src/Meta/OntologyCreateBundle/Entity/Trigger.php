<?php

namespace Meta\OntologyCreateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trigger
 */
class Trigger
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
    private $typeAction;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $startprocesses;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->startprocesses = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Trigger
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
     * @return Trigger
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
     * Set typeAction
     *
     * @param string $typeAction
     * @return Trigger
     */
    public function setTypeAction($typeAction)
    {
        $this->typeAction = $typeAction;

        return $this;
    }

    /**
     * Get typeAction
     *
     * @return string 
     */
    public function getTypeAction()
    {
        return $this->typeAction;
    }

    /**
     * Add startprocesses
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyProcess $startprocesses
     * @return Trigger
     */
    public function addStartprocess(\Meta\OntologyCreateBundle\Entity\OntologyProcess $startprocesses)
    {
        $this->startprocesses[] = $startprocesses;

        return $this;
    }

    /**
     * Remove startprocesses
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyProcess $startprocesses
     */
    public function removeStartprocess(\Meta\OntologyCreateBundle\Entity\OntologyProcess $startprocesses)
    {
        $this->startprocesses->removeElement($startprocesses);
    }

    /**
     * Get startprocesses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStartprocesses()
    {
        return $this->startprocesses;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $stopprocesses;


    /**
     * Add stopprocesses
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyProcess $stopprocesses
     * @return Trigger
     */
    public function addStopprocess(\Meta\OntologyCreateBundle\Entity\OntologyProcess $stopprocesses)
    {
        $this->stopprocesses[] = $stopprocesses;

        return $this;
    }

    /**
     * Remove stopprocesses
     *
     * @param \Meta\OntologyCreateBundle\Entity\OntologyProcess $stopprocesses
     */
    public function removeStopprocess(\Meta\OntologyCreateBundle\Entity\OntologyProcess $stopprocesses)
    {
        $this->stopprocesses->removeElement($stopprocesses);
    }

    /**
     * Get stopprocesses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStopprocesses()
    {
        return $this->stopprocesses;
    }
}
