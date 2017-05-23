<?php

namespace Alexandreo\Entity\Requests;


use Alexandreo\Contracts\Requests\FraudAnalysisTransactionDetailsContracts;

class FraudAnalysisTransactionDetailsEntity implements FraudAnalysisTransactionDetailsContracts
{

    private $requestId;

    private $accessKey;

    private $version;

    private $merchantId;

    private $antiFraudTransactionId;

    /**
     * @return mixed
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param mixed $requestId
     * @return FraudAnalysisTransactionDetailsEntity
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * @param mixed $accessKey
     * @return FraudAnalysisTransactionDetailsEntity
     */
    public function setAccessKey($accessKey)
    {
        $this->accessKey = $accessKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     * @return FraudAnalysisTransactionDetailsEntity
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @param mixed $merchantId
     * @return FraudAnalysisTransactionDetailsEntity
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAntiFraudTransactionId()
    {
        return $this->antiFraudTransactionId;
    }

    /**
     * @param mixed $antiFraudTransactionId
     * @return FraudAnalysisTransactionDetailsEntity
     */
    public function setAntiFraudTransactionId($antiFraudTransactionId)
    {
        $this->antiFraudTransactionId = $antiFraudTransactionId;
        return $this;
    }

}