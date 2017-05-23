<?php
require_once '../../vendor/autoload.php';

use Alexandreo\BrasPag;
use Alexandreo\Entity\Requests\FraudAnalysisEntity;
use Alexandreo\Entity\AntiFraudRequest\AntiFraudRequestEntity;
use Alexandreo\Entity\AntiFraudRequest\ItemDataCollectionEntity;
use Alexandreo\Entity\AntiFraudRequest\BillToDataEntity;
use Alexandreo\Entity\AntiFraudRequest\DocumentDataEntity;
use Alexandreo\Entity\ItemDataCollection\ItemDataEntity;
use Alexandreo\Entity\ItemDataCollection\ProductDataEntity;
use Alexandreo\Entity\Requests\AuthorizeTransactionEntity;


$brasPag = new BrasPag(false);


$productDataEntity = (new ProductDataEntity)
    ->setQuantity(1)
    ->setUnitPrice(100.00);
$itemDataEntity = (new ItemDataEntity)
    ->setProductData($productDataEntity);

$itemDataCollectionEntity = (new ItemDataCollectionEntity)
    ->setItemData($itemDataEntity);

$billToData = (new BillToDataEntity)
    ->setCity('São Paulo')
    ->setCountry('BR')
    ->setEmail('alebrsux@hotmail.com')
    ->setFirstName('Alexandre')
    ->setLastName('Oliveira')
    ->setState('SP')
    ->setStreet1('Rua desembargador rodrigues sette 365');


$documentDataEntity = (new DocumentDataEntity)
    ->setCpf('68398151374');


$antiFraudRequestEntity = (new AntiFraudRequestEntity)
    ->setItemDataCollection($itemDataCollectionEntity)
    ->setBillToData($billToData)
    ->setMerchantReferenceCode(rand(0,9000));


$fraudAnalysisEntity = new FraudAnalysisEntity;
$fraudAnalysisEntity
    ->setRequestId('f062e2e7-6c12-4dd5-b56f-9e1b34a7a2bb')
    ->setMerchantId('9164B642-764F-7939-04E6-ABFAD50ED85A')
    ->setAccessKey('6f317fa4-4702-4176-9814-0c16fe4778c1')
    ->setAntiFraudSequenceType('AnalyseOnly')
    ->setAntiFraudRequest($antiFraudRequestEntity)
    ->setDocumentData($documentDataEntity);



$fraudAnalysis = $brasPag->fraudAnalysis($fraudAnalysisEntity);
dd($fraudAnalysis);