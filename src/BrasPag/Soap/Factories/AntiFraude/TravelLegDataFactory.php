<?php

namespace Alexandreo\Soap\Factories\AntiFraude;


use Alexandreo\Contracts\DecisionManagerData\TravelLegDataContracts;

class TravelLegDataFactory
{

    /**
     * @var TravelLegDataContracts
     */
    private $travelLegData;

    function __construct(TravelLegDataContracts $travelLegData)
    {
        $this->travelLegData = $travelLegData;
    }

    public function make()
    {
        $travelLegData = new \stdClass();
        $travelLegData->Origin = $this->travelLegData->getOrigin();
        $travelLegData->Destination = $this->travelLegData->getDestination();
        return $travelLegData;
    }

}