<?php 
namespace Alexandreo\Contracts\AntiFraudRequest;

/**
 * Interface BillToDataContracts
 * @package Alexandreo\Contracts\AntiFraudRequest
 */
interface BillToDataContracts
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
     * @param $customerId
     * @return mixed
     */
    public function setCustomerId($customerId);

    /**
     * @param $email
     * @return mixed
     */
    public function setEmail($email);

    /**
     * @param $firstName
     * @return mixed
     */
    public function setFirstName($firstName);

    /**
     * @param $hostName
     * @return mixed
     */
    public function setHostName($hostName);

    /**
     * @param $httpBrowserCookiesAccepted
     * @return mixed
     */
    public function setHttpBrowserCookiesAccepted($httpBrowserCookiesAccepted);

    /**
     * @param $httpBrowserEmail
     * @return mixed
     */
    public function setHttpBrowserEmail($httpBrowserEmail);

    /**
     * @param $httpBrowserType
     * @return mixed
     */
    public function setHttpBrowserType($httpBrowserType);

    /**
     * @param $ipAddress
     * @return mixed
     */
    public function setIpAddress($ipAddress);

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
    public function getCustomerId();

    /**
     * @return mixed
     */
    public function getEmail();

    /**
     * @return mixed
     */
    public function getFirstName();

    /**
     * @return mixed
     */
    public function getHostName();

    /**
     * @return mixed
     */
    public function getHttpBrowserCookiesAccepted();

    /**
     * @return mixed
     */
    public function getHttpBrowserEmail();

    /**
     * @return mixed
     */
    public function getHttpBrowserType();

    /**
     * @return mixed
     */
    public function getIpAddress();

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