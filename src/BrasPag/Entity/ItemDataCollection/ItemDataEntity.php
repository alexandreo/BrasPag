<?php

namespace Alexandreo\Entity\ItemDataCollection;


use Alexandreo\Contracts\ItemDataCollection\ItemDataContracts;
use Alexandreo\Contracts\ItemDataCollection\PassengerDataContracts;
use Alexandreo\Contracts\ItemDataCollection\ProductDataContracts;

/**
 * Class ItemDataEntity
 * @package BrasPag\Entity\ItemDataCollection
 */
class ItemDataEntity implements ItemDataContracts
{

    /**
     * @var
     */
    private $giftCategory = 'Undefined';

    /**
     * @var
     */
    private $hostHedge = 'Undefined';

    /**
     * @var
     */
    private $nonSensicalHedge = 'Undefined';

    /**
     * @var
     */
    private $obscenitiesHedge = 'Undefined';

    /**
     * @var
     */
    private $passengerData;

    /**
     * @var
     */
    private $phoneHedge = 'Undefined';

    /**
     * @var
     */
    private $productData;

    /**
     * @var
     */
    private $timeHedge = 'Undefined';

    /**
     * @var
     */
    private $velocityHedge = 'Undefined';

    /**
     * @param $giftCategory
     * @return mixed
     */
    public function setGiftCategory($giftCategory)
    {
        $this->giftCategory = $giftCategory;
        return $this;
    }

    /**
     * @param $hostHedge
     * @return mixed
     */
    public function setHostHedge($hostHedge)
    {
        $this->hostHedge = $hostHedge;
        return $this;
    }

    /**
     * @param $nonSensicalHedge
     * @return mixed
     */
    public function setNonSensicalHedge($nonSensicalHedge)
    {
        $this->nonSensicalHedge = $nonSensicalHedge;
        return $this;
    }

    /**
     * @param $obscenitiesHedge
     * @return mixed
     */
    public function setObscenitiesHedge($obscenitiesHedge)
    {
        $this->obscenitiesHedge = $obscenitiesHedge;
        return $this;
    }

    /**
     * @param \Alexandreo\Contracts\ItemDataCollection\PassengerDataContracts $passengerData
     * @return mixed
     */
    public function setPassengerData(PassengerDataContracts $passengerData)
    {
        $this->passengerData = $passengerData;
        return $this;
    }

    /**
     * @param $phoneHedge
     * @return mixed
     */
    public function setPhoneHedge($phoneHedge)
    {
        $this->phoneHedge = $phoneHedge;
        return $this;
    }

    /**
     * @param ProductDataContracts $productData
     * @return mixed
     */
    public function setProductData(ProductDataContracts $productData)
    {
        $this->productData = $productData;
        return $this;
    }

    /**
     * @param $timeHedge
     * @return mixed
     */
    public function setTimeHedge($timeHedge)
    {
        $this->timeHedge = $timeHedge;
        return $this;
    }

    /**
     * @param $velocityHedge
     * @return mixed
     */
    public function setVelocityHedge($velocityHedge)
    {
        $this->velocityHedge = $velocityHedge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGiftCategory()
    {
        return $this->giftCategory;
    }

    /**
     * @return mixed
     */
    public function getHostHedge()
    {
        return $this->hostHedge;
    }

    /**
     * @return mixed
     */
    public function getNonSensicalHedge()
    {
        return $this->nonSensicalHedge;
    }

    /**
     * @return mixed
     */
    public function getObscenitiesHedge()
    {
        return $this->obscenitiesHedge;
    }

    /**
     * @return mixed
     */
    public function getPassengerData()
    {
        return $this->passengerData;
    }

    /**
     * @return mixed
     */
    public function getPhoneHedge()
    {
        return $this->phoneHedge;
    }

    /**
     * @return mixed
     */
    public function getProductData()
    {
        return $this->productData;
    }

    /**
     * @return mixed
     */
    public function getTimeHedge()
    {
        return $this->timeHedge;
    }

    /**
     * @return mixed
     */
    public function getVelocityHedge()
    {
        return $this->velocityHedge;
    }
}