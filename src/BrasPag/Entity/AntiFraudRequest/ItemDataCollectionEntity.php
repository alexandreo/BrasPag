<?php

namespace Alexandreo\Entity\AntiFraudRequest;


use Alexandreo\Contracts\AntiFraudRequest\ItemDataCollectionContracts;
use Alexandreo\Contracts\ItemDataCollection\ItemDataContracts;

/**
 * Class ItemDataCollectionEntity
 * @package BrasPag\Entity\AntiFraudRequest
 */
class ItemDataCollectionEntity implements ItemDataCollectionContracts
{

    /**
     * @var array
     */
    private $itemData = [];

    /**
     * @param ItemDataContracts $itemData
     * @return mixed
     */
    public function setItemData(ItemDataContracts $itemData)
    {
        $this->itemData[] = $itemData;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemData()
    {
        return $this->itemData;
    }
}