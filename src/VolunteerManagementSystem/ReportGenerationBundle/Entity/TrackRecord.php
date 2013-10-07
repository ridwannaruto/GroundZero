<?php

namespace VolunteerManagementSystem\ReportGenerationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrackRecord
 */
class TrackRecord
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
    private $workshopAttended;


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
     * @return TrackRecord
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
     * @return TrackRecord
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
     * @return TrackRecord
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
     * @return TrackRecord
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
     * @return TrackRecord
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
     * @return TrackRecord
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
     * Set workshopAttended
     *
     * @param array $workshopAttended
     * @return TrackRecord
     */
    public function setWorkshopAttended($workshopAttended)
    {
        $this->workshopAttended = $workshopAttended;
    
        return $this;
    }

    /**
     * Get workshopAttended
     *
     * @return array 
     */
    public function getWorkshopAttended()
    {
        return $this->workshopAttended;
    }
}
