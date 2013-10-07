<?php

namespace VolunteerManagementSystem\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=30, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=30, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=20, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=20, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=10, nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=15, nullable=false)
     */
    private $phonenumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOfBirth", type="date", nullable=false)
     */
    private $dateofbirth;

    /**
     * @var string
     *
     * @ORM\Column(name="nameWithInitials", type="string", length=30, nullable=false)
     */
    private $namewithinitials;

    /**
     * @var string
     *
     * @ORM\Column(name="nic", type="string", length=15, nullable=false)
     */
    private $nic;

    /**
     * @var string
     *
     * @ORM\Column(name="mobilenumber", type="string", length=15, nullable=false)
     */
    private $mobilenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="accesslevel", type="string", length=15, nullable=false)
     */
    private $accesslevel;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=15, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=15, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=15, nullable=false)
     */
    private $country;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
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
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     * @return User
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;
    
        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string 
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set dateofbirth
     *
     * @param \DateTime $dateofbirth
     * @return User
     */
    public function setDateofbirth($dateofbirth)
    {
        $this->dateofbirth = $dateofbirth;
    
        return $this;
    }

    /**
     * Get dateofbirth
     *
     * @return \DateTime 
     */
    public function getDateofbirth()
    {
        return $this->dateofbirth;
    }

    /**
     * Set namewithinitials
     *
     * @param string $namewithinitials
     * @return User
     */
    public function setNamewithinitials($namewithinitials)
    {
        $this->namewithinitials = $namewithinitials;
    
        return $this;
    }

    /**
     * Get namewithinitials
     *
     * @return string 
     */
    public function getNamewithinitials()
    {
        return $this->namewithinitials;
    }

    /**
     * Set nic
     *
     * @param string $nic
     * @return User
     */
    public function setNic($nic)
    {
        $this->nic = $nic;
    
        return $this;
    }

    /**
     * Get nic
     *
     * @return string 
     */
    public function getNic()
    {
        return $this->nic;
    }

    /**
     * Set mobilenumber
     *
     * @param string $mobilenumber
     * @return User
     */
    public function setMobilenumber($mobilenumber)
    {
        $this->mobilenumber = $mobilenumber;
    
        return $this;
    }

    /**
     * Get mobilenumber
     *
     * @return string 
     */
    public function getMobilenumber()
    {
        return $this->mobilenumber;
    }

    /**
     * Set accesslevel
     *
     * @param string $accesslevel
     * @return User
     */
    public function setAccesslevel($accesslevel)
    {
        $this->accesslevel = $accesslevel;
    
        return $this;
    }

    /**
     * Get accesslevel
     *
     * @return string 
     */
    public function getAccesslevel()
    {
        return $this->accesslevel;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
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