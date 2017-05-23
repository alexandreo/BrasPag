<?php

namespace Alexandreo\Contracts\ItemDataCollection;

/**
 * Interface ProductDataContracts
 * @package Alexandreo\Contracts\ItemDataCollection
 */
interface ProductDataContracts
{

    /**
     * @param $code
     * @return mixed
     */
    public function setCode($code);

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name);

    /**
     * @param $risk
     * @return mixed
     */
    public function setRisk($risk);

    /**
     * @param $sku
     * @return mixed
     */
    public function setSku($sku);

    /**
     * @param $quantity
     * @return mixed
     */
    public function setQuantity($quantity);

    /**
     * @param $unitPrice
     * @return mixed
     */
    public function setUnitPrice($unitPrice);


    /**
     * @return mixed
     */
    public function getCode();

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getRisk();

    /**
     * @return mixed
     */
    public function getSku();

    /**
     * @return mixed
     */
    public function getQuantity();

    /**
     * @return mixed
     */
    public function getUnitPrice();

}