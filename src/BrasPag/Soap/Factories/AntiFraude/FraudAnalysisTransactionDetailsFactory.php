<?php

namespace Alexandreo\Soap\Factories\AntiFraude;


use Alexandreo\Contracts\Requests\FraudAnalysisTransactionDetailsContracts;

class FraudAnalysisTransactionDetailsFactory
{

    public function make(FraudAnalysisTransactionDetailsContracts $fraudAnalysisTransactionDetails)
    {
        $request = new \stdClass();
        $request->RequestId = $fraudAnalysisTransactionDetails->getRequestId();
        $request->AccessKey = $fraudAnalysisTransactionDetails->getAccessKey();
        $request->Version = $fraudAnalysisTransactionDetails->getVersion();
        $request->MerchantId = $fraudAnalysisTransactionDetails->getMerchantId();
        $request->AntiFraudTransactionId = $fraudAnalysisTransactionDetails->getAntiFraudTransactionId();
        return $request;
    }

}