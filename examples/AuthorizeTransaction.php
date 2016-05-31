<?php
require_once '../vendor/autoload.php';


use Alexandreo\BrasPag;
use Alexandreo\Entity\Requests\AuthorizeTransactionEntity;
use Alexandreo\Entity\Order\OrderDataEntity;
use Alexandreo\Entity\Customer\CustomerDataEntity;
use Alexandreo\Entity\Payment\PaymentDataRequestEntity;
use Alexandreo\Entity\Payment\PaymentDataCollectionEntity;
use Alexandreo\Entity\Payment\CreditCardDataRequestEntity;

$BrasPag = new BrasPag(false);
$orderDataEntity = new OrderDataEntity;
$orderDataEntity
	->setMerchantId('you MerchantId')
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

$authorizeTransaction = $BrasPag->authorizeTransaction($authorizeTransactionEntity);

dd($authorizeTransaction);
