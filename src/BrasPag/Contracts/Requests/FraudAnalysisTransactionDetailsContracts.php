<?php

namespace Alexandreo\Contracts\Requests;


interface FraudAnalysisTransactionDetailsContracts
{

    public function setRequestId($requestId);

    public function setAccessKey($accessKey);

    public function setVersion($version);

    public function setMerchantId($merchantId);

    public function setAntiFraudTransactionId($antiFraudTransactionId);

    public function getRequestId();

    public function getAccessKey();

    public function getVersion();

    public function getMerchantId();

    public function getAntiFraudTransactionId();

}