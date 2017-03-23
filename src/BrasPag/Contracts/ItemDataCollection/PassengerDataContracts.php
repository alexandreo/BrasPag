<?php

namespace Alexandreo\Contracts\ItemDataCollection;


/**
 * Interface PassengerDataContracts
 * @package Alexandreo\Contracts\ItemDataCollection
 */
interface PassengerDataContracts
{

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
     * @param $passengerId
     * @return mixed
     */
    public function setPassengerId($passengerId);

    /**
     * @param $status
     * @return mixed
     */
    public function setStatus($status);

    /**
     * @param $passenger
     * @return mixed
     */
    public function setPassenger($passenger);

    /**
     * @param $email
     * @return mixed
     */
    public function setEmail($email);

    /**
     * @param $phone
     * @return mixed
     */
    public function setPhone($phone);

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
    public function getPassengerId();

    /**
     * @return mixed
     */
    public function getStatus();

    /**
     * @return mixed
     */
    public function getPassenger();

    /**
     * @return mixed
     */
    public function getEmail();

    /**
     * @return mixed
     */
    public function getPhone();

}