<?php

namespace AppBundle\Entity;

/**
 * Contact
 */
class Contact
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $chooseCar;

    /**
     * @var string
     */
    private $pickupLocation;

    /**
     * @var string
     */
    private $dropoffLocation;

    /**
     * @var string
     */
    private $pickupDate;

    /**
     * @var string
     */
    private $pickupTime;

    /**
     * @var string
     */
    private $dropoffDate;

    /**
     * @var string
     */
    private $dropoffTime;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Contact
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
     * Set email
     *
     * @param string $email
     *
     * @return Contact
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
     * Set phone
     *
     * @param string $phone
     *
     * @return Contact
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set chooseCar
     *
     * @param string $chooseCar
     *
     * @return Contact
     */
    public function setChooseCar($chooseCar)
    {
        $this->chooseCar = $chooseCar;

        return $this;
    }

    /**
     * Get chooseCar
     *
     * @return string
     */
    public function getChooseCar()
    {
        return $this->chooseCar;
    }

    /**
     * Set pickupLocation
     *
     * @param string $pickupLocation
     *
     * @return Contact
     */
    public function setPickupLocation($pickupLocation)
    {
        $this->pickupLocation = $pickupLocation;

        return $this;
    }

    /**
     * Get pickupLocation
     *
     * @return string
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    /**
     * Set dropoffLocation
     *
     * @param string $dropoffLocation
     *
     * @return Contact
     */
    public function setDropoffLocation($dropoffLocation)
    {
        $this->dropoffLocation = $dropoffLocation;

        return $this;
    }

    /**
     * Get dropoffLocation
     *
     * @return string
     */
    public function getDropoffLocation()
    {
        return $this->dropoffLocation;
    }

    /**
     * Set pickupDate
     *
     * @param string $pickupDate
     *
     * @return Contact
     */
    public function setPickupDate($pickupDate)
    {
        $this->pickupDate = $pickupDate;

        return $this;
    }

    /**
     * Get pickupDate
     *
     * @return string
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }

    /**
     * Set pickupTime
     *
     * @param string $pickupTime
     *
     * @return Contact
     */
    public function setPickupTime($pickupTime)
    {
        $this->pickupTime = $pickupTime;

        return $this;
    }

    /**
     * Get pickupTime
     *
     * @return string
     */
    public function getPickupTime()
    {
        return $this->pickupTime;
    }

    /**
     * Set dropoffDate
     *
     * @param string $dropoffDate
     *
     * @return Contact
     */
    public function setDropoffDate($dropoffDate)
    {
        $this->dropoffDate = $dropoffDate;

        return $this;
    }

    /**
     * Get dropoffDate
     *
     * @return string
     */
    public function getDropoffDate()
    {
        return $this->dropoffDate;
    }

    /**
     * Set dropoffTime
     *
     * @param string $dropoffTime
     *
     * @return Contact
     */
    public function setDropoffTime($dropoffTime)
    {
        $this->dropoffTime = $dropoffTime;

        return $this;
    }

    /**
     * Get dropoffTime
     *
     * @return string
     */
    public function getDropoffTime()
    {
        return $this->dropoffTime;
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
