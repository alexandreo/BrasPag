<?php

namespace Alexandreo\Soap\Factories\AntiFraude;

use StdClass;
use Alexandreo\Contracts\Requests\FraudAnalysisContracts;
use Alexandreo\Soap\Factories\AntiFraude\AntiFraudRequestFactory;
use Alexandreo\Soap\Factories\CreditCard\AuthorizeTransactionFactory;

class FraudAnalysisFactory
{

    private $fraudAnalysis;

    private $request;

    /**
     * FraudAnalysisFactory constructor.
     * @param FraudAnalysisContracts $fraudAnalysis
     */
    function __construct(FraudAnalysisContracts $fraudAnalysis)
    {
        $this->fraudAnalysis = $fraudAnalysis;

        $this->request = new StdClass;
    }

    /**
     * @return StdClass
     */
    public function make()
    {
        $this->request->RequestId = $this->fraudAnalysis->getRequestId();
        $this->request->AccessKey = $this->fraudAnalysis->getAccessKey();
        $this->request->Version = $this->fraudAnalysis->getVersion();
        $this->request->AntiFraudSequenceType = $this->fraudAnalysis->getAntiFraudSequenceType();
        $this->request->AntiFraudRequest = $this->makeAntiFraudRequest();
        $this->request->MerchantId = $this->fraudAnalysis->getMerchantId();
        $this->request->AntiFraudRequest = $this->makeAntiFraudRequest();
        $this->request->DocumentData = $this->makeDocumentData();
        if (!is_null($this->fraudAnalysis->getAuthorizeTransactionRequest())) {
            $this->request->AuthorizeTransactionRequest = $this->makeAuthorizeTransactionRequest();
        }
        return $this->request;
    }


    private function makeAntiFraudRequest()
    {
        $antiFraudRequestFactory = new AntiFraudRequestFactory($this->fraudAnalysis->getAntiFraudRequest());
        return $antiFraudRequestFactory->make();
    }


    private function makeDocumentData()
    {
        $documentData = new StdClass;
        $documentData->Cpf = $this->fraudAnalysis->getDocumentData()->getCpf();
        $documentData->Cnpj = $this->fraudAnalysis->getDocumentData()->getCnpj();
        $documentData->Other = $this->fraudAnalysis->getDocumentData()->getOther();
        return $documentData;
    }

    /**
     * @return \Alexandreo\Soap\Factories\CreditCard\StdClass
     */
    private function makeAuthorizeTransactionRequest()
    {
        return (new AuthorizeTransactionFactory)->make($this->fraudAnalysis->getAuthorizeTransactionRequest());
    }


}