<?php

namespace Alexandreo\Contracts\DecisionManagerData;

use Alexandreo\Contracts\DecisionManagerData\TravelLegDataCollectionContracts;

/**
 * Interface TravelDataContracts
 * @package Alexandreo\Contracts\DecisionManagerData
 */
interface TravelDataContracts
{

    /**
     * @param $completeRoute
     * @return mixed
     */
    public function setCompleteRoute($completeRoute);

    /**
     * @param $departureDateTime
     * @return mixed
     */
    public function setDepartureDateTime($departureDateTime);

    /**
     * @param $journeyType
     * @return mixed
     */
    public function setJourneyType($journeyType);

    /**
     * @param \Alexandreo\Contracts\DecisionManagerData\TravelLegDataCollectionContracts $travelLegDataCollection
     * @return mixed
     */
    public function setTravelLegDataCollection(TravelLegDataCollectionContracts $travelLegDataCollection);

    /**
     * @return mixed
     */
    public function getCompleteRoute();

    /**
     * @return mixed
     */
    public function getDepartureDateTime();

    /**
     * @return mixed
     */
    public function getJourneyType();

    /**
     * @return mixed
     */
    public function getTravelLegDataCollection();

}