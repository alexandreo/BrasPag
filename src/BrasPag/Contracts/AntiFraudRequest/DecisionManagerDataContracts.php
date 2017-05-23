<?php

namespace Alexandreo\Contracts\AntiFraudRequest;

use Alexandreo\Contracts\DecisionManagerData\TravelDataContracts;

/**
 * Interface DecisionManagerDataContracts
 * @package Alexandreo\Contracts\AntiFraudRequest
 */
interface DecisionManagerDataContracts
{

    /**
     * @param TravelDataContracts $travelData
     * @return mixed
     */
    public function setTravelData(TravelDataContracts $travelData);

    /**
     * @return mixed
     */
    public function getTravelData();

}