<?php

namespace Alexandreo\Entity\AntiFraudRequest;


use Alexandreo\Contracts\AntiFraudRequest\BankInfoDataContracts;

/**
 * Class BankInfoDataEntity
 * @package BrasPag\Entity\AntiFraudRequest
 */
class BankInfoDataEntity implements BankInfoDataContracts
{

    /**
     * @var
     */
    private $address;

    /**
     * @var
     */
    private $code;

    /**
     * @var
     */
    private $branchCode;

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
    private $name;

    /**
     * @var
     */
    private $swiftCode;


    /**
     * @param $address
     * @return mixed
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param $code
     * @return mixed
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param $branchCode
     * @return mixed
     */
    public function setBranchCode($branchCode)
    {
        $this->branchCode = $branchCode;
        return $this;
    }

    /**
     * @param $city
     * @return mixed
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param $country
     * @return mixed
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param $swiftCode
     * @return mixed
     */
    public function setSwiftCode($swiftCode)
    {
        $this->swiftCode = $swiftCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getBranchCode()
    {
        return $this->branchCode;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSwiftCode()
    {
        return $this->swiftCode;
    }
}