<?php

namespace Alexandreo\Contracts\AntiFraudRequest;

/**
 * Interface FundTransferDataContracts
 * @package Alexandreo\Contracts\AntiFraudRequest
 */
interface FundTransferDataContracts
{

    /**
     * @param $accountName
     * @return mixed
     */
    public function setAccountName($accountName);

    /**
     * @param $accountNumber
     * @return mixed
     */
    public function setAccountNumber($accountNumber);

    /**
     * @param $bankCheckDigit
     * @return mixed
     */
    public function setBankCheckDigit($bankCheckDigit);

    /**
     * @param $iban
     * @return mixed
     */
    public function setIban($iban);

}