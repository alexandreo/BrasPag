<?php

namespace Alexandreo\Entity\AntiFraudRequest;


use Alexandreo\Contracts\AntiFraudRequest\FundTransferDataContracts;

/**
 * Class FundTransferDataEntity
 * @package BrasPag\Entity\AntiFraudRequest
 */
class FundTransferDataEntity implements FundTransferDataContracts
{

    /**
     * @var
     */
    private $accountName;

    /**
     * @var
     */
    private $accountNumber;

    /**
     * @var
     */
    private $bankCheckDigit;

    /**
     * @var
     */
    private $iban;

    /**
     * @return mixed
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param mixed $accountName
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    /**
     * @return mixed
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param mixed $accountNumber
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * @return mixed
     */
    public function getBankCheckDigit()
    {
        return $this->bankCheckDigit;
    }

    /**
     * @param mixed $bankCheckDigit
     */
    public function setBankCheckDigit($bankCheckDigit)
    {
        $this->bankCheckDigit = $bankCheckDigit;
    }

    /**
     * @return mixed
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param mixed $iban
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }


}