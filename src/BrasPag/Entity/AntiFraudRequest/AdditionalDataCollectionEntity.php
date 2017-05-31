<?php

namespace Alexandreo\Entity\AntiFraudRequest;


use Alexandreo\Contracts\AdditionalDataCollection\AdditionalDataContracts;
use Alexandreo\Contracts\AntiFraudRequest\AdditionalDataCollectionContracts;

/**
 * Class AdditionalDataCollectionEntity
 * @package BrasPag\Entity\AntiFraudRequest
 */
class AdditionalDataCollectionEntity implements AdditionalDataCollectionContracts
{

    /**
     * @var array
     */
    private $additionalData = [];

    /**
     * @param AdditionalDataContracts $additionalData
     * @return mixed
     */
    public function setAdditionalData(AdditionalDataContracts $additionalData)
    {
        $this->additionalData[] = $additionalData;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdditionalData()
    {
        return $this->additionalData;
    }
}