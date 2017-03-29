<?php

namespace Alexandreo\Contracts\DecisionManagerData;

/**
 * Interface TravelLegDataContracts
 * @package Alexandreo\Contracts\DecisionManagerData
 */
interface TravelLegDataContracts
{

    /**
     * @param $origin
     * @return mixed
     */
    public function setOrigin($origin);

    /**
     * @param $destination
     * @return mixed
     */
    public function setDestination($destination);

    /**
     * @param $origin
     * @return mixed
     */
    public function getOrigin();

    /**
     * @param $destination
     * @return mixed
     */
    public function getDestination();

}