<?php

namespace Alexandreo\Entity\AntiFraudRequest;


use Alexandreo\Contracts\AntiFraudRequest\PurchaseTotalsDataContracts;

/**
 * Class PurchaseTotalsDataEntity
 * @package BrasPag\Entity\AntiFraudRequest
 */
class PurchaseTotalsDataEntity implements PurchaseTotalsDataContracts
{

    /**
     * @var
     */
    private $currency;

    /**
     * @var
     */
    private $grandTotalAmount;

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getGrandTotalAmount()
    {
        return $this->grandTotalAmount;
    }

    /**
     * @param mixed $grandTotalAmount
     */
    public function setGrandTotalAmount($grandTotalAmount)
    {
        $this->grandTotalAmount = $grandTotalAmount;
    }

}