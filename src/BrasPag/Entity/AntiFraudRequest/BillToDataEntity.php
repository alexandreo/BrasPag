<?php

namespace Alexandreo\Entity\AntiFraudRequest;

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
    private $dateOfBirth;

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
     * @return BillToDataEntity
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
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
     * @return BillToDataEntity
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
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
     * @return BillToDataEntity
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
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
     * @return BillToDataEntity
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
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
     * @return BillToDataEntity
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
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
     * @return BillToDataEntity
     */
    public function setHostName($hostName)
    {
        $this->hostName = $hostName;
        return $this;
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
     * @return BillToDataEntity
     */
    public function setHttpBrowserCookiesAccepted($httpBrowserCookiesAccepted)
    {
        $this->httpBrowserCookiesAccepted = $httpBrowserCookiesAccepted;
        return $this;
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
     * @return BillToDataEntity
     */
    public function setHttpBrowserEmail($httpBrowserEmail)
    {
        $this->httpBrowserEmail = $httpBrowserEmail;
        return $this;
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
     * @return BillToDataEntity
     */
    public function setHttpBrowserType($httpBrowserType)
    {
        $this->httpBrowserType = $httpBrowserType;
        return $this;
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
     * @return BillToDataEntity
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
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
     * @return BillToDataEntity
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
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
     * @return BillToDataEntity
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
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
     * @return BillToDataEntity
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
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
     * @return BillToDataEntity
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
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
     * @return BillToDataEntity
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;
        return $this;
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
     * @return BillToDataEntity
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
        return $this;
    }

}