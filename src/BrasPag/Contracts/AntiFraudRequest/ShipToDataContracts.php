<?php

namespace Alexandreo\Contracts\AntiFraudRequest;


/**
 * Interface ShipToDataContracts
 * @package Alexandreo\Contracts\AntiFraudRequest
 */
interface ShipToDataContracts
{

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
     * @param $firstName
     * @return mixed
     */
    public function setFirstName($firstName);

    /**
     * @param $lastName
     * @return mixed
     */
    public function setLastName($lastName);

    /**
     * @param $phoneNumber
     * @return mixed
     */
    public function setPhoneNumber($phoneNumber);

    /**
     * @param $postalCode
     * @return mixed
     */
    public function setPostalCode($postalCode);

    /**
     * @param $shippingMethod
     * @return mixed
     */
    public function setShippingMethod($shippingMethod);

    /**
     * @param $state
     * @return mixed
     */
    public function setState($state);

    /**
     * @param $street1
     * @return mixed
     */
    public function setStreet1($street1);

    /**
     * @param $street2
     * @return mixed
     */
    public function setStreet2($street2);

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
    public function getFirstName();

    /**
     * @return mixed
     */
    public function getLastName();

    /**
     * @return mixed
     */
    public function getPhoneNumber();

    /**
     * @return mixed
     */
    public function getPostalCode();

    /**
     * @return mixed
     */
    public function getShippingMethod();

    /**
     * @return mixed
     */
    public function getState();

    /**
     * @return mixed
     */
    public function getStreet1();

    /**
     * @return mixed
     */
    public function getStreet2();

}