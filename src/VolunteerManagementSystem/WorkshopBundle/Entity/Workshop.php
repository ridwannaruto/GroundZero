<?php

namespace VolunteerManagementSystem\WorkshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Workshop
 */
class Workshop
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $workshopname;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $registrationdeadline;

    /**
     * @var integer
     */
    private $capacity;

    /**
     * @var array
     */
    private $registeredlist;

    /**
     * @var array
     */
    private $selectedlist;


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
     * Set workshopname
     *
     * @param string $workshopname
     * @return Workshop
     */
    public function setWorkshopname($workshopname)
    {
        $this->workshopname = $workshopname;
    
        return $this;
    }

    /**
     * Get workshopname
     *
     * @return string 
     */
    public function getWorkshopname()
    {
        return $this->workshopname;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Workshop
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
     * Set date
     *
     * @param \DateTime $date
     * @return Workshop
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set registrationdeadline
     *
     * @param \DateTime $registrationdeadline
     * @return Workshop
     */
    public function setRegistrationdeadline($registrationdeadline)
    {
        $this->registrationdeadline = $registrationdeadline;
    
        return $this;
    }

    /**
     * Get registrationdeadline
     *
     * @return \DateTime 
     */
    public function getRegistrationdeadline()
    {
        return $this->registrationdeadline;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     * @return Workshop
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    
        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer 
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set registeredlist
     *
     * @param array $registeredlist
     * @return Workshop
     */
    public function setRegisteredlist($registeredlist)
    {
        $this->registeredlist = $registeredlist;
    
        return $this;
    }

    /**
     * Get registeredlist
     *
     * @return array 
     */
    public function getRegisteredlist()
    {
        return $this->registeredlist;
    }

    /**
     * Set selectedlist
     *
     * @param array $selectedlist
     * @return Workshop
     */
    public function setSelectedlist($selectedlist)
    {
        $this->selectedlist = $selectedlist;
    
        return $this;
    }

    /**
     * Get selectedlist
     *
     * @return array 
     */
    public function getSelectedlist()
    {
        return $this->selectedlist;
    }
}
