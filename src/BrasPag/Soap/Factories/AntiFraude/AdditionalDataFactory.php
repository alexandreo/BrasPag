<?php

namespace Alexandreo\Soap\Factories\AntiFraude;

use Alexandreo\Contracts\AdditionalDataCollection\AdditionalDataContracts;

/**
 * Class AdditionalDataFactory
 * @package Alexandreo\Soap\Factories\AntiFraude
 */
class AdditionalDataFactory
{

    /**
     * @var AdditionalDataContracts
     */
    private $additionalData;

    /**
     * AdditionalDataFactory constructor.
     * @param AdditionalDataContracts $additionalData
     */
    function __construct(AdditionalDataContracts $additionalData)
    {
        $this->additionalData = $additionalData;
    }

    /**
     * @return \stdClass
     */
    public function make()
    {
        $additionalData = new \stdClass();
        $additionalData->Id = $this->additionalData->getId();
        $additionalData->Value = $this->additionalData->getValue();
        return $additionalData;
    }


}