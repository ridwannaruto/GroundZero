<?php

namespace VolunteerManagementSystem\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rate
 */
class Rate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */

    /**
     * @var integer
     */
    private $rate;

    /**
     * @var string
     */
    private $comment;


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
     * @return Rate
     */
   

    /**
     * Get name
     *
     * @return string 
     */
   

    /**
     * Set rate
     *
     * @param integer $rate
     * @return Rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    
        return $this;
    }

    /**
     * Get rate
     *
     * @return integer 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Rate
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
}
