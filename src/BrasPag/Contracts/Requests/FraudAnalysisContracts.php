<?php 
namespace Alexandreo\Contracts\Requests;

use Alexandreo\Contracts\AntiFraudRequest\AntiFraudRequestContracts;
use Alexandreo\Contracts\AntiFraudRequest\DocumentDataContracts;
use Alexandreo\Contracts\Requests\AuthorizeTransactionContracts;

/**
 * Interface FraudAnalysisContracts
 * @package Alexandreo\Contracts\Requests
 */
interface FraudAnalysisContracts
{

    /**
     * @param $requestId
     * @return mixed
     */
    public function setRequestId($requestId);

    /**
     * @param $version
     * @return mixed
     */
    public function setVersion($version);

    /**
     * @param $accessKey
     * @return mixed
     */
    public function setAccessKey($accessKey);

    /**
     * @param $antiFraudSequenceType
     * @return mixed
     */
    public function setAntiFraudSequenceType($antiFraudSequenceType);

    /**
     * @param AntiFraudRequestContracts $antiFraudRequest
     * @return mixed
     */
    public function setAntiFraudRequest(AntiFraudRequestContracts $antiFraudRequest);

    /**
     * @param $merchantId
     * @return mixed
     */
    public function setMerchantId($merchantId);

    /**
     * @param DocumentDataContracts $documentData
     * @return mixed
     */
    public function setDocumentData(DocumentDataContracts $documentData);

    /**
     * @param \Alexandreo\Contracts\Requests\AuthorizeTransactionContracts $authorizeTransaction
     * @return mixed
     */
    public function setAuthorizeTransactionRequest(AuthorizeTransactionContracts $authorizeTransaction);

    /**
     * @return mixed
     */
    public function getRequestId();

    /**
     * @return mixed
     */
    public function getVersion();

    /**
     * @return mixed
     */
    public function getAccessKey();

    /**
     * @return mixed
     */
    public function getAntiFraudSequenceType();

    /**
     * @return mixed
     */
    public function getAntiFraudRequest();

    /**
     * @return mixed
     */
    public function getMerchantId();

    /**
     * @return mixed
     */
    public function getDocumentData();

    /**
     * @return mixed
     */
    public function getAuthorizeTransactionRequest();

}