<?php

namespace Alexandreo\Entity\Requests;

use Alexandreo\Contracts\AntiFraudRequest\AntiFraudRequestContracts;
use Alexandreo\Contracts\AntiFraudRequest\DocumentDataContracts;
use Alexandreo\Contracts\Requests\AuthorizeTransactionContracts;
use Alexandreo\Contracts\Requests\FraudAnalysisContracts;

/**
 * Class FraudAnalysisEntity
 * @package Alexandreo\Entity\Requests
 */
class FraudAnalysisEntity implements FraudAnalysisContracts
{

    /**
     * @var
     */
    private $requestId;

    /**
     * @var string
     */
    private $version = '1.0';

    /**
     * @var
     */
    private $accessKey;

    /**
     * @var
     */
    private $antiFraudSequenceType;

    /**
     * @var
     */
    private $antiFraudRequest;

    /**
     * @var
     */
    private $merchantId;

    /**
     * @var
     */
    private $documentData;

    /**
     * @var
     */
    private $authorizeTransaction;

    /**
     * @param $requestId
     * @return mixed
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @param $version
     * @return mixed
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @param $accessKey
     * @return mixed
     */
    public function setAccessKey($accessKey)
    {
        $this->accessKey = $accessKey;
        return $this;
    }

    /**
     * @param $antiFraudSequenceType
     * @return mixed
     */
    public function setAntiFraudSequenceType($antiFraudSequenceType)
    {
        $this->antiFraudSequenceType = $antiFraudSequenceType;
        return $this;
    }

    /**
     * @param AntiFraudRequestContracts $antiFraudRequest
     * @return mixed
     */
    public function setAntiFraudRequest(AntiFraudRequestContracts $antiFraudRequest)
    {
        $this->antiFraudRequest = $antiFraudRequest;
        return $this;
    }

    /**
     * @param $merchantId
     * @return mixed
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    /**
     * @param DocumentDataContracts $documentData
     * @return mixed
     */
    public function setDocumentData(DocumentDataContracts $documentData)
    {
        $this->documentData = $documentData;
        return $this;
    }

    /**
     * @param \Alexandreo\Contracts\Requests\AuthorizeTransactionContracts $authorizeTransaction
     * @return mixed
     */
    public function setAuthorizeTransactionRequest(AuthorizeTransactionContracts $authorizeTransaction)
    {
        $this->authorizeTransaction = $authorizeTransaction;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return mixed
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * @return mixed
     */
    public function getAntiFraudSequenceType()
    {
        return $this->antiFraudSequenceType;
    }

    /**
     * @return mixed
     */
    public function getAntiFraudRequest()
    {
        return $this->antiFraudRequest;
    }

    /**
     * @return mixed
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @return mixed
     */
    public function getDocumentData()
    {
        return $this->documentData;
    }

    /**
     * @return mixed
     */
    public function getAuthorizeTransactionRequest()
    {
        return $this->authorizeTransaction;
    }
}