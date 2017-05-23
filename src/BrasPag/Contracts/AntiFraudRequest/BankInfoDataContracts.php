<?php 
namespace Alexandreo\Contracts\AntiFraudRequest;

/**
 * Interface BankInfoDataContracts
 * @package Alexandreo\Contracts\AntiFraudRequest
 */
interface BankInfoDataContracts
{

    /**
     * @param $address
     * @return mixed
     */
    public function setAddress($address);

    /**
     * @param $code
     * @return mixed
     */
    public function setCode($code);

    /**
     * @param $branchCode
     * @return mixed
     */
    public function setBranchCode($branchCode);

    /**
     * @param $city
     * @return mixed
     */
    public function setCity($city);

    /**
     * @param $country
     * @return mixed
     */
    public function setCountry($country);

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name);

    /**
     * @param $swiftCode
     * @return mixed
     */
    public function setSwiftCode($swiftCode);

    /**
     * @return mixed
     */
    public function getAddress();

    /**
     * @return mixed
     */
    public function getCode();

    /**
     * @return mixed
     */
    public function getBranchCode();

    /**
     * @return mixed
     */
    public function getCity();

    /**
     * @return mixed
     */
    public function getCountry();

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getSwiftCode();

}