<?php

namespace Alexandreo\Entity\AdditionalDataCollection;


use Alexandreo\Contracts\AdditionalDataCollection\AdditionalDataContracts;

class AdditionalDataEntity implements AdditionalDataContracts
{

    private $id;

    private $value;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return AdditionalDataEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return AdditionalDataEntity
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

}