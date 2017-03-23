<?php

namespace Alexandreo\Contracts\AntiFraudRequest;

use Alexandreo\Contracts\AdditionalDataCollection\AdditionalDataContracts;

/**
 * Interface AdditionalDataCollectionContracts
 * @package Alexandreo\Contracts\AntiFraudRequest
 */
interface AdditionalDataCollectionContracts
{

    /**
     * @param AdditionalDataContracts $additionalData
     * @return mixed
     */
    public function setAdditionalData(AdditionalDataContracts $additionalData);

    /**
     * @return mixed
     */
    public function getAdditionalData();

}