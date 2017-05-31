<?php

namespace Alexandreo\Entity\AntiFraudRequest;

use Alexandreo\Contracts\AntiFraudRequest\InvoiceHeaderDataContracts;

/**
 * Class InvoiceHeaderDataEntity
 * @package BrasPag\Entity\AntiFraudRequest
 */
class InvoiceHeaderDataEntity implements InvoiceHeaderDataContracts
{

    /**
     * @var
     */
    private $isGift;

    /**
     * @var
     */
    private $merchantDescriptor;

    /**
     * @var
     */
    private $returnsAccepted;

    /**
     * @var
     */
    private $tender;

    /**
     * @return mixed
     */
    public function getIsGift()
    {
        return $this->isGift;
    }

    /**
     * @param mixed $isGift
     */
    public function setIsGift($isGift)
    {
        $this->isGift = $isGift;
    }

    /**
     * @return mixed
     */
    public function getMerchantDescriptor()
    {
        return $this->merchantDescriptor;
    }

    /**
     * @param mixed $merchantDescriptor
     */
    public function setMerchantDescriptor($merchantDescriptor)
    {
        $this->merchantDescriptor = $merchantDescriptor;
    }

    /**
     * @return mixed
     */
    public function getReturnsAccepted()
    {
        return $this->returnsAccepted;
    }

    /**
     * @param mixed $returnsAccepted
     */
    public function setReturnsAccepted($returnsAccepted)
    {
        $this->returnsAccepted = $returnsAccepted;
    }

    /**
     * @return mixed
     */
    public function getTender()
    {
        return $this->tender;
    }

    /**
     * @param mixed $tender
     */
    public function setTender($tender)
    {
        $this->tender = $tender;
    }

}