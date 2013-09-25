<?php

namespace Test\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Login
 */
class Login
{
    /**
     * @var integer
     */
    private $username;

    /**
     * @var integer
     */
    private $password;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set username
     *
     * @param integer $username
     * @return Login
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return integer 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param integer $password
     * @return Login
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return integer 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Login
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
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
}
