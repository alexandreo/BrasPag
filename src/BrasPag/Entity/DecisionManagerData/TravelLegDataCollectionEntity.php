<?php

namespace Alexandreo\Entity\DecisionManagerData;


use Alexandreo\Contracts\DecisionManagerData\TravelLegDataCollectionContracts;
use Alexandreo\Contracts\DecisionManagerData\TravelLegDataContracts;

class TravelLegDataCollectionEntity implements TravelLegDataCollectionContracts
{

    private $travelLegData;

    /**
     * @param \Alexandreo\Contracts\DecisionManagerData\TravelLegDataContracts $TravelLegData
     * @return mixed
     */
    public function setTravelLegData(TravelLegDataContracts $travelLegData)
    {
        $this->travelLegData[] = $travelLegData;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTravelLegData()
    {
        return $this->travelLegData;
    }
}