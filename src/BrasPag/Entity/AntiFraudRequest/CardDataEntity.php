<?php

namespace Alexandreo\Entity\AntiFraudRequest;


use Alexandreo\Contracts\AntiFraudRequest\CardDataContracts;

/**
 * Class CardDataEntity
 * @package BrasPag\Entity\AntiFraudRequest
 */
class CardDataEntity implements CardDataContracts
{

    /**
     * @var
     */
    private $accountNumber;

    /**
     * @var
     */
    private $card;

    /**
     * @var
     */
    private $expirationMonth;

    /**
     * @var
     */
    private $expirationYear;

    /**
     * @var
     */
    private $accountToken;

    /**
     * @var
     */
    private $accountAlias;

    /**
     * @var
     */
    private $saveAccountNumber;

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
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param mixed $card
     */
    public function setCard($card)
    {
        $this->card = $card;
    }

    /**
     * @return mixed
     */
    public function getExpirationMonth()
    {
        return $this->expirationMonth;
    }

    /**
     * @param mixed $expirationMonth
     */
    public function setExpirationMonth($expirationMonth)
    {
        $this->expirationMonth = $expirationMonth;
    }

    /**
     * @return mixed
     */
    public function getExpirationYear()
    {
        return $this->expirationYear;
    }

    /**
     * @param mixed $expirationYear
     */
    public function setExpirationYear($expirationYear)
    {
        $this->expirationYear = $expirationYear;
    }

    /**
     * @return mixed
     */
    public function getAccountToken()
    {
        return $this->accountToken;
    }

    /**
     * @param mixed $accountToken
     */
    public function setAccountToken($accountToken)
    {
        $this->accountToken = $accountToken;
    }

    /**
     * @return mixed
     */
    public function getAccountAlias()
    {
        return $this->accountAlias;
    }

    /**
     * @param mixed $accountAlias
     */
    public function setAccountAlias($accountAlias)
    {
        $this->accountAlias = $accountAlias;
    }

    /**
     * @return mixed
     */
    public function getSaveAccountNumber()
    {
        return $this->saveAccountNumber;
    }

    /**
     * @param mixed $saveAccountNumber
     */
    public function setSaveAccountNumber($saveAccountNumber)
    {
        $this->saveAccountNumber = $saveAccountNumber;
    }

}