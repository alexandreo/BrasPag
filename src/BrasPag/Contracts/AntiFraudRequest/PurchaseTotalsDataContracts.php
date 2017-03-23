<?php

namespace Alexandreo\Contracts\AntiFraudRequest;

/**
 * Interface PurchaseTotalsDataContracts
 * @package Alexandreo\Contracts\AntiFraudRequest
 */
interface PurchaseTotalsDataContracts
{

    /**
     * @param $currency
     * @return mixed
     */
    public function setCurrency($currency);

    /**
     * @param $grandTotalAmount
     * @return mixed
     */
    public function setGrandTotalAmount($grandTotalAmount);

    /**
     * @return mixed
     */
    public function getCurrency();

    /**
     * @return mixed
     */
    public function getGrandTotalAmount();

}