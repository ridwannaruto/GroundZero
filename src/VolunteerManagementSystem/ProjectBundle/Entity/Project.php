<?php

namespace VolunteerManagementSystem\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 */
class Project
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
     * @var \DateTime
     */
    private $startdate;

    /**
     * @var \DateTime
     */
    private $enddate;

    /**
     * @var \stdClass
     */
    private $projectmanager;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $objectives;

    private $events;
    private $volunteers;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    public function getVolunteers()
    {
        return $this->volunteers;
    }
     public function getEvents()
    {
        return $this->events;
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Project
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }
    public function setEvents($events)
    {
        $this->events = $events;
    
        return $this;
    }
    public function setVolunteers($name)
    {
        $this->volunteers = $volunteers;
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
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return Project
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;
    
        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     * @return Project
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;
    
        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime 
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set projectmanager
     *
     * @param \stdClass $projectmanager
     * @return Project
     */
    public function setProjectmanager($projectmanager)
    {
        $this->projectmanager = $projectmanager;
    
        return $this;
    }

    /**
     * Get projectmanager
     *
     * @return \stdClass 
     */
    public function getProjectmanager()
    {
        return $this->projectmanager;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Project
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
     * Set objectives
     *
     * @param string $objectives
     * @return Project
     */
    public function setObjectives($objectives)
    {
        $this->objectives = $objectives;
    
        return $this;
    }

    /**
     * Get objectives
     *
     * @return string 
     */
    public function getObjectives()
    {
        return $this->objectives;
    }
}
