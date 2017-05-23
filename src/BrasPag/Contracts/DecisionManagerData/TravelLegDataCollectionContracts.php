<?php

namespace Alexandreo\Contracts\DecisionManagerData;

use Alexandreo\Contracts\DecisionManagerData\TravelLegDataContracts;

/**
 * Interface TravelLegDataCollectionContracts
 * @package Alexandreo\Contracts\DecisionManagerData
 */
interface TravelLegDataCollectionContracts
{

    /**
     * @param \Alexandreo\Contracts\DecisionManagerData\TravelLegDataContracts $TravelLegData
     * @return mixed
     */
    public function setTravelLegData(TravelLegDataContracts $travelLegData);

    /**
     * @return mixed
     */
    public function getTravelLegData();

}