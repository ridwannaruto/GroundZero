<?php

namespace VolunteerManagementSystem\EventBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Task
{
    protected $description;

    protected $rates;

    public function __construct()
    {
        $this->rates = new ArrayCollection();
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getRates()
    {
        return $this->rates;
    }

}
