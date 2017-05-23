<?php

namespace Alexandreo\Contracts\AntiFraudRequest;

/**
 * Interface InvoiceHeaderDataContracts
 * @package Alexandreo\Contracts\AntiFraudRequest
 */
/**
 * Interface InvoiceHeaderDataContracts
 * @package Alexandreo\Contracts\AntiFraudRequest
 */
interface InvoiceHeaderDataContracts
{

    /**
     * @param $isGift
     * @return mixed
     */
    public function setIsGift($isGift);

    /**
     * @param $merchantDescriptor
     * @return mixed
     */
    public function setMerchantDescriptor($merchantDescriptor);

    /**
     * @param $returnsAccepted
     * @return mixed
     */
    public function setReturnsAccepted($returnsAccepted);

    /**
     * @param $tender
     * @return mixed
     */
    public function setTender($tender);

    /**
     * @return mixed
     */
    public function getIsGift();

    /**
     * @return mixed
     */
    public function getMerchantDescriptor();

    /**
     * @return mixed
     */
    public function getReturnsAccepted();

    /**
     * @return mixed
     */
    public function getTender();

}