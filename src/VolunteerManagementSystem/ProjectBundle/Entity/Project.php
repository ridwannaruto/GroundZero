<?php

namespace VolunteerManagementSystem\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use VolunteerManagementSystem\RegistrationBundle\Entity\User;
/**
 * Project
 */
class Project
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @var \DateTime
     */
    private $objectives;
    private $startdate;

    /**
     * @var \DateTime
     */
    private $enddate;

 

    private $projectmanager;
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
     * @return Project
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
    public function setObjectives($objectives)
    {
        $this->objectives = $objectives;
    
        return $this;
    }
    public function getObjectives()
    {
        return $this->objectives;
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
     * @param  $projectmanager
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
     * @return string 
     */
    public function getProjectmanager()
    {
        return $this->projectmanager;
    }
}
