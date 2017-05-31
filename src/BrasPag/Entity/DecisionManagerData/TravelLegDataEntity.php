<?php

namespace Alexandreo\Entity\DecisionManagerData;

use Alexandreo\Contracts\DecisionManagerData\TravelLegDataContracts;

/**
 * Class TravelLegDataEntity
 * @package BrasPag\Entity\DecisionManagerData
 */
class TravelLegDataEntity implements TravelLegDataContracts
{

    /**
     * @var
     */
    private $origin;

    /**
     * @var
     */
    private $destination;

    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param mixed $origin
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

}