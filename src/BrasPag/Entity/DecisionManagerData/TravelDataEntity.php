<?php

namespace Alexandreo\Entity\DecisionManagerData;


use Alexandreo\Contracts\DecisionManagerData\TravelDataContracts;
use Alexandreo\Contracts\DecisionManagerData\TravelLegDataCollectionContracts;

class TravelDataEntity implements TravelDataContracts
{

    private $completeRoute;

    private $departureDateTime;

    private $journeyType;

    private $travelLegDataCollection;

    public function setCompleteRoute($completeRoute)
    {
        $this->completeRoute = $completeRoute;
        return $this;
    }

    public function setDepartureDateTime($departureDateTime)
    {
        $this->departureDateTime = $departureDateTime;
        return $this;
    }

    public function setJourneyType($journeyType)
    {
        $this->journeyType = $journeyType;
        return $this;
    }

    public function setTravelLegDataCollection(TravelLegDataCollectionContracts $travelLegDataCollection)
    {
        $this->travelLegDataCollection = $travelLegDataCollection;
        return $this;
    }
}