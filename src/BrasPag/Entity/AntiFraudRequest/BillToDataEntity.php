<?php

namespace BrasPag\Entity\AntiFraudRequest;

use Alexandreo\Contracts\AntiFraudRequest\BillToDataContracts;

/**
 * Class BillToDataEntity
 * @package BrasPag\Entity\AntiFraudRequest
 */
class BillToDataEntity implements BillToDataContracts
{

    /**
     * @var
     */
    private $city;

    /**
     * @var
     */
    private $country;

    /**
     * @var
     */
    private $customerId;

    /**
     * @var
     */
    private $email;

    /**
     * @var
     */
    private $firstName;

    /**
     * @var
     */
    private $hostName;

    /**
     * @var
     */
    private $httpBrowserCookiesAccepted;

    /**
     * @var
     */
    private $httpBrowserEmail;

    /**
     * @var
     */
    private $httpBrowserType;

    /**
     * @var
     */
    private $ipAddress;

    /**
     * @var
     */
    private $lastName;

    /**
     * @var
     */
    private $phoneNumber;

    /**
     * @var
     */
    private $postalCode;

    /**
     * @var
     */
    private $state;

    /**
     * @var
     */
    private $street1;

    /**
     * @var
     */
    private $street2;

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param mixed $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getHostName()
    {
        return $this->hostName;
    }

    /**
     * @param mixed $hostName
     */
    public function setHostName($hostName)
    {
        $this->hostName = $hostName;
    }

    /**
     * @return mixed
     */
    public function getHttpBrowserCookiesAccepted()
    {
        return $this->httpBrowserCookiesAccepted;
    }

    /**
     * @param mixed $httpBrowserCookiesAccepted
     */
    public function setHttpBrowserCookiesAccepted($httpBrowserCookiesAccepted)
    {
        $this->httpBrowserCookiesAccepted = $httpBrowserCookiesAccepted;
    }

    /**
     * @return mixed
     */
    public function getHttpBrowserEmail()
    {
        return $this->httpBrowserEmail;
    }

    /**
     * @param mixed $httpBrowserEmail
     */
    public function setHttpBrowserEmail($httpBrowserEmail)
    {
        $this->httpBrowserEmail = $httpBrowserEmail;
    }

    /**
     * @return mixed
     */
    public function getHttpBrowserType()
    {
        return $this->httpBrowserType;
    }

    /**
     * @param mixed $httpBrowserType
     */
    public function setHttpBrowserType($httpBrowserType)
    {
        $this->httpBrowserType = $httpBrowserType;
    }

    /**
     * @return mixed
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param mixed $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * @param mixed $street1
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;
    }

    /**
     * @return mixed
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * @param mixed $street2
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
    }

}