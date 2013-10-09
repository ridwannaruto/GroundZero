<?php

namespace VolunteerManagementSystem\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 */
class Event
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
     * @var integer
     */
    private $teamleader;

    /**
     * @var integer
     */
    private $project;

    /**
     * @var integer
     */
    private $weight;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $goals;

    /**
     * @var array
     */
    private $volunteerslist;

    /**
     * @var array
     */
    private $subscribers;

    /**
     * @var \DateTime
     */
    private $startdate;

    /**
     * @var \DateTime
     */
    private $starttime;

    /**
     * @var \DateTime
     */
    private $deadline;

    /**
     * @var \DateTime
     */
    private $deadlinetime;

    /**
     * @var \DateTime
     */
    private $enddate;

    /**
     * @var \DateTime
     */
    private $endtime;


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
     * @return Event
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
     * Set teamleader
     *
     * @param integer $teamleader
     * @return Event
     */
    public function setTeamleader($teamleader)
    {
        $this->teamleader = $teamleader;
    
        return $this;
    }

    /**
     * Get teamleader
     *
     * @return integer 
     */
    public function getTeamleader()
    {
        return $this->teamleader;
    }

    /**
     * Set project
     *
     * @param integer $project
     * @return Event
     */
    public function setProject($project)
    {
        $this->project = $project;
    
        return $this;
    }

    /**
     * Get project
     *
     * @return integer 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return Event
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    
        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Event
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
     * Set goals
     *
     * @param string $goals
     * @return Event
     */
    public function setGoals($goals)
    {
        $this->goals = $goals;
    
        return $this;
    }

    /**
     * Get goals
     *
     * @return string 
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * Set volunteerslist
     *
     * @param array $volunteerslist
     * @return Event
     */
    public function setVolunteerslist($volunteerslist)
    {
        $this->volunteerslist = $volunteerslist;
    
        return $this;
    }

    /**
     * Get volunteerslist
     *
     * @return array 
     */
    public function getVolunteerslist()
    {
        return $this->volunteerslist;
    }

    /**
     * Set subscribers
     *
     * @param array $subscribers
     * @return Event
     */
    public function setSubscribers($subscribers)
    {
        $this->subscribers = $subscribers;
    
        return $this;
    }

    /**
     * Get subscribers
     *
     * @return array 
     */
    public function getSubscribers()
    {
        return $this->subscribers;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return Event
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
     * Set starttime
     *
     * @param \DateTime $starttime
     * @return Event
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;
    
        return $this;
    }

    /**
     * Get starttime
     *
     * @return \DateTime 
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set deadline
     *
     * @param \DateTime $deadline
     * @return Event
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;
    
        return $this;
    }

    /**
     * Get deadline
     *
     * @return \DateTime 
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set deadlinetime
     *
     * @param \DateTime $deadlinetime
     * @return Event
     */
    public function setDeadlinetime($deadlinetime)
    {
        $this->deadlinetime = $deadlinetime;
    
        return $this;
    }

    /**
     * Get deadlinetime
     *
     * @return \DateTime 
     */
    public function getDeadlinetime()
    {
        return $this->deadlinetime;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     * @return Event
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
     * Set endtime
     *
     * @param \DateTime $endtime
     * @return Event
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;
    
        return $this;
    }

    /**
     * Get endtime
     *
     * @return \DateTime 
     */
    public function getEndtime()
    {
        return $this->endtime;
    }
}
