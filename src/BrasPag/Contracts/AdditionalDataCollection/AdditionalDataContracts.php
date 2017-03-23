<?php

namespace Alexandreo\Contracts\AdditionalDataCollection;

/**
 * Interface AdditionalDataContracts
 * @package Alexandreo\Contracts\AdditionalDataCollection
 */
interface AdditionalDataContracts
{

    /**
     * @param $id
     * @return mixed
     */
    public function setId($id);

    /**
     * @param $value
     * @return mixed
     */
    public function setValue($value);

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return mixed
     */
    public function getValue();

}