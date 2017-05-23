<?php

namespace Alexandreo\Entity\ItemDataCollection;

use Alexandreo\Contracts\ItemDataCollection\ProductDataContracts;

/**
 * Class ProductDataEntity
 * @package BrasPag\Entity\ItemDataCollection
 */
class ProductDataEntity implements ProductDataContracts
{

    /**
     * @var
     */
    private $code = 'Undefined';

    /**
     * @var
     */
    private $name;

    /**
     * @var
     */
    private $risk = 'Undefined';

    /**
     * @var
     */
    private $sku;

    /**
     * @var
     */
    private $quantity;

    /**
     * @var
     */
    private $unitPrice;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     * @return ProductDataEntity
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return ProductDataEntity
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRisk()
    {
        return $this->risk;
    }

    /**
     * @param mixed $risk
     * @return ProductDataEntity
     */
    public function setRisk($risk)
    {
        $this->risk = $risk;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     * @return ProductDataEntity
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     * @return ProductDataEntity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param mixed $unitPrice
     * @return ProductDataEntity
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }


}