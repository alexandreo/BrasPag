<?php

namespace Alexandreo\Contracts\ItemDataCollection;

use Alexandreo\Contracts\ItemDataCollection\PassengerDataContracts;
use Alexandreo\Contracts\ItemDataCollection\ProductDataContracts;

/**
 * Interface ItemDataContracts
 * @package Alexandreo\Contracts\ItemDataCollection
 */
interface ItemDataContracts
{

    /**
     * @param $giftCategory
     * @return mixed
     */
    public function setGiftCategory($giftCategory);

    /**
     * @param $hostHedge
     * @return mixed
     */
    public function setHostHedge($hostHedge);

    /**
     * @param $nonSensicalHedge
     * @return mixed
     */
    public function setNonSensicalHedge($nonSensicalHedge);

    /**
     * @param $obscenitiesHedge
     * @return mixed
     */
    public function setObscenitiesHedge($obscenitiesHedge);

    /**
     * @param \Alexandreo\Contracts\ItemDataCollection\PassengerDataContracts $passengerData
     * @return mixed
     */
    public function setPassengerData(PassengerDataContracts $passengerData);

    /**
     * @param $phoneHedge
     * @return mixed
     */
    public function setPhoneHedge($phoneHedge);

    /**
     * @param ProductDataContracts $productData
     * @return mixed
     */
    public function setProductData(ProductDataContracts $productData);

    /**
     * @param $timeHedge
     * @return mixed
     */
    public function setTimeHedge($timeHedge);

    /**
     * @param $velocityHedge
     * @return mixed
     */
    public function setVelocityHedge($velocityHedge);

    /**
     * @return mixed
     */
    public function getGiftCategory();

    /**
     * @return mixed
     */
    public function getHostHedge();

    /**
     * @return mixed
     */
    public function getNonSensicalHedge();

    /**
     * @return mixed
     */
    public function getObscenitiesHedge();

    /**
     * @return mixed
     */
    public function getPassengerData();

    /**
     * @return mixed
     */
    public function getPhoneHedge();

    /**
     * @return mixed
     */
    public function getProductData();

    /**
     * @return mixed
     */
    public function getTimeHedge();

    /**
     * @return mixed
     */
    public function getVelocityHedge();

}