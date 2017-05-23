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
use Alexandreo\Entity\Order\OrderDataEntity;
use Alexandreo\Entity\Customer\CustomerDataEntity;
use Alexandreo\Entity\Payment\PaymentDataRequestEntity;
use Alexandreo\Entity\Payment\PaymentDataCollectionEntity;
use Alexandreo\Entity\Payment\CreditCardDataRequestEntity;

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
    ->setCpf('38827243828');


$antiFraudRequestEntity = (new AntiFraudRequestEntity)
    ->setItemDataCollection($itemDataCollectionEntity)
    ->setBillToData($billToData)
    ->setMerchantReferenceCode(rand(0,9000));

//credit card...
$orderDataEntity = new OrderDataEntity;
$orderDataEntity
    ->setMerchantId('78d72764-b315-4b55-9558-c0aeb8dd8352')
    ->setOrderId(rand(100,99999));

$customerDataEntity = new CustomerDataEntity;
$customerDataEntity
    ->setCustomerIdentity('38827243828')
    ->setCustomerName('Teste Fluxo Rede')
    ->setCustomerEmail('compradot@teste.com');

$CreditCardDataRequestEntity = new CreditCardDataRequestEntity;
$CreditCardDataRequestEntity
    ->setNumberOfPayments(1)
    ->setPaymentPlan(3)
    ->setTransactionType(1)
    ->setCardHolder('Comprador Teste')
    ->setCardNumber('0000000000000001')
    ->setCardSecurityCode('111')
    ->setCardExpirationDate('07/2017');

$paymentDataRequestEntity = new PaymentDataRequestEntity;
$paymentDataRequestEntity
    ->setPaymentMethod('997')
    ->setAmount('110')
    ->setObjPaymentType($CreditCardDataRequestEntity);

$paymentDataCollectionEntity = (new PaymentDataCollectionEntity())->setPaymentDataRequest($paymentDataRequestEntity);

$authorizeTransactionEntity = new AuthorizeTransactionEntity;
$authorizeTransactionEntity
    ->setOrderData($orderDataEntity)
    ->setCustomerData($customerDataEntity)
    ->setPaymentDataCollection($paymentDataCollectionEntity);


$fraudAnalysisEntity = new FraudAnalysisEntity;
$fraudAnalysisEntity
    ->setRequestId('f062e2e7-6c12-4dd5-b56f-9e1b34a7a2bb')
    ->setMerchantId('9164B642-764F-7939-04E6-ABFAD50ED85A')
    ->setAccessKey('6f317fa4-4702-4176-9814-0c16fe4778c1')
    ->setAntiFraudSequenceType('AnalyseAndAuthorizeOnSuccess')
    ->setAntiFraudRequest($antiFraudRequestEntity)
    ->setDocumentData($documentDataEntity)
    ->setAuthorizeTransactionRequest($authorizeTransactionEntity);

$fraudAnalysis = $brasPag->fraudAnalysis($fraudAnalysisEntity);
dd($fraudAnalysis);