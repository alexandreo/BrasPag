<?php
/**
 * Created by PhpStorm.
 * User: ale
 * Date: 21/03/17
 * Time: 10:00
 */

namespace Alexandreo\Contracts\AntiFraudRequest;


interface CardDataContracts
{

    /**
     * @param $accountNumber
     * @return mixed
     */
    public function setAccountNumber($accountNumber);

    /**
     * @param $accountNumber
     * @return mixed
     */
    public function setCard($card);

    /**
     * @param $expirationMonth
     * @return mixed
     */
    public function setExpirationMonth($expirationMonth);

    /**
     * @param $expirationYear
     * @return mixed
     */
    public function setExpirationYear($expirationYear);

    /**
     * @param $accountToken
     * @return mixed
     */
    public function setAccountToken($accountToken);

    /**
     * @param $accountAlias
     * @return mixed
     */
    public function setAccountAlias($accountAlias);

    /**
     * @param $saveAccountNumber
     * @return mixed
     */
    public function setSaveAccountNumber($saveAccountNumber);

    /**
     * @return mixed
     */
    public function getAccountNumber();

    /**
     * @return mixed
     */
    public function getCard();

    /**
     * @return mixed
     */
    public function getExpirationMonth();

    /**
     * @return mixed
     */
    public function getExpirationYear();

    /**
     * @return mixed
     */
    public function getAccountToken();

    /**
     * @return mixed
     */
    public function getAccountAlias();

    /**
     * @return mixed
     */
    public function getSaveAccountNumber();

}