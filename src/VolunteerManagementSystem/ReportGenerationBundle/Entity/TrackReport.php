<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrackReport
 */
class TrackReport
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $joinedDate;

    /**
     * @var float
     */
    private $overallRating;

    /**
     * @var integer
     */
    private $totalWeight;

    /**
     * @var array
     */
    private $eventHistory;

    /**
     * @var array
     */
    private $comments;

    /**
     * @var array
     */
    private $workshopsAttended;


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
     * Set userId
     *
     * @param integer $userId
     * @return TrackReport
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set joinedDate
     *
     * @param \DateTime $joinedDate
     * @return TrackReport
     */
    public function setJoinedDate($joinedDate)
    {
        $this->joinedDate = $joinedDate;
    
        return $this;
    }

    /**
     * Get joinedDate
     *
     * @return \DateTime 
     */
    public function getJoinedDate()
    {
        return $this->joinedDate;
    }

    /**
     * Set overallRating
     *
     * @param float $overallRating
     * @return TrackReport
     */
    public function setOverallRating($overallRating)
    {
        $this->overallRating = $overallRating;
    
        return $this;
    }

    /**
     * Get overallRating
     *
     * @return float 
     */
    public function getOverallRating()
    {
        return $this->overallRating;
    }

    /**
     * Set totalWeight
     *
     * @param integer $totalWeight
     * @return TrackReport
     */
    public function setTotalWeight($totalWeight)
    {
        $this->totalWeight = $totalWeight;
    
        return $this;
    }

    /**
     * Get totalWeight
     *
     * @return integer 
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    /**
     * Set eventHistory
     *
     * @param array $eventHistory
     * @return TrackReport
     */
    public function setEventHistory($eventHistory)
    {
        $this->eventHistory = $eventHistory;
    
        return $this;
    }

    /**
     * Get eventHistory
     *
     * @return array 
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }

    /**
     * Set comments
     *
     * @param array $comments
     * @return TrackReport
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    
        return $this;
    }

    /**
     * Get comments
     *
     * @return array 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set workshopsAttended
     *
     * @param array $workshopsAttended
     * @return TrackReport
     */
    public function setWorkshopsAttended($workshopsAttended)
    {
        $this->workshopsAttended = $workshopsAttended;
    
        return $this;
    }

    /**
     * Get workshopsAttended
     *
     * @return array 
     */
    public function getWorkshopsAttended()
    {
        return $this->workshopsAttended;
    }
}
