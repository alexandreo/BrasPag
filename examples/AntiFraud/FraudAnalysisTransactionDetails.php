<?php
require_once '../../vendor/autoload.php';

use Alexandreo\BrasPag;
use Alexandreo\Entity\Requests\FraudAnalysisTransactionDetailsEntity;

$brasPag = new BrasPag(false);

$fraudAnalysisTransactionDetailsEntity = (new FraudAnalysisTransactionDetailsEntity)
    ->setAccessKey('f062e2e7-6c12-4dd5-b56f-9e1b34a7a2bb')
    ->setAntiFraudTransactionId('154a0151-5dd0-4af5-b011-38270ee4eba7')
    ->setMerchantId('9164B642-764F-7939-04E6-ABFAD50ED85A')
    ->setRequestId('f062e2e7-6c12-4dd5-b56f-9e1b34a7a2bb');

$fraudAnalysisTransactionDetails = $brasPag->fraudAnalysisTransactionDetails($fraudAnalysisTransactionDetailsEntity);
dd($fraudAnalysisTransactionDetails);