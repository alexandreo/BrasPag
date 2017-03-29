<?php

namespace Alexandreo\Soap\Factories\AntiFraude;

use Alexandreo\Contracts\ItemDataCollection\ItemDataContracts;
use StdClass;


/**
 * Class ItemDataFactory
 * @package Alexandreo\Soap\Factories\AntiFraude
 */
class ItemDataFactory
{

    /**
     * @var ItemDataContracts
     */
    private $itemData;

    /**
     * ItemDataFactory constructor.
     * @param ItemDataContracts $itemData
     */
    public function __construct(ItemDataContracts $itemData)
    {
        $this->itemData = $itemData;
    }

    /**
     * @return StdClass
     */
    public function make()
    {
        $itemData = new StdClass;

        $itemData->GiftCategory = $this->itemData->getGiftCategory();
        $itemData->HostHedge = $this->itemData->getHostHedge();
        $itemData->NonSensicalHedge = $this->itemData->getNonSensicalHedge();
        $itemData->ObscenitiesHedge = $this->itemData->getObscenitiesHedge();
        if (!is_null($this->itemData->getPassengerData())){
            $itemData->PassengerData = $this->makePassengerData();
        }
        $itemData->PhoneHedge = $this->itemData->getPhoneHedge();
        $itemData->ProductData = $this->makeProductData();
        $itemData->TimeHedge = $this->itemData->getTimeHedge();
        $itemData->VelocityHedge = $this->itemData->getVelocityHedge();
        return $itemData;
    }

    /**
     * @return StdClass
     */
    private function makePassengerData()
    {
        $passengerData = new StdClass;
        if (!is_null($this->itemData->getPassengerData())){
            $passengerData->FirstName = $this->itemData->getPassengerData()->getFirstName();
            $passengerData->LastName = $this->itemData->getPassengerData()->getPassengerId();
            $passengerData->PassengerId = $this->itemData->getPassengerData()->getPassengerId();
            $passengerData->Status = $this->itemData->getPassengerData()->getStatus();
            $passengerData->Passenger = $this->itemData->getPassengerData()->getPassenger();
            $passengerData->Email = $this->itemData->getPassengerData()->getEmail();
            $passengerData->Phone = $this->itemData->getPassengerData()->getPhone();
        }
        return $passengerData;
    }

    /**
     * @return StdClass
     */
    private function makeProductData()
    {
        $productData = new StdClass;
        if (!is_null($this->itemData->getProductData())){
            $productData->Code = $this->itemData->getProductData()->getCode();
            $productData->Name = $this->itemData->getProductData()->getName();
            $productData->Risk = $this->itemData->getProductData()->getRisk();
            $productData->Sku = $this->itemData->getProductData()->getSku();
            $productData->Quantity = $this->itemData->getProductData()->getQuantity();
            $productData->UnitPrice = $this->itemData->getProductData()->getUnitPrice();
        }
        return $productData;
    }
}