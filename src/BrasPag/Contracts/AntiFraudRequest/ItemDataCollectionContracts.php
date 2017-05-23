<?php 
namespace Alexandreo\Contracts\AntiFraudRequest;

use Alexandreo\Contracts\ItemDataCollection\ItemDataContracts;

/**
 * Interface ItemDataCollectionContracts
 * @package Alexandreo\Contracts\AntiFraudRequest
 */
interface ItemDataCollectionContracts
{

    /**
     * @param ItemDataContracts $itemData
     * @return mixed
     */
    public function setItemData(ItemDataContracts $itemData);

    /**
     * @return mixed
     */
    public function getItemData();

}