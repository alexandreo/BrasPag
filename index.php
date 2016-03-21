<?php
require_once 'vendor/autoload.php';

use Alexandreo\BrasPag;
use Alexandreo\Entity\Requests\AuthorizeTransactionEntity;
use Alexandreo\Entity\Order\OrderDataEntity;
use Alexandreo\Entity\Customer\CustomerDataEntity;
use Alexandreo\Entity\Payment\PaymentDataRequestEntity;
use Alexandreo\Entity\Payment\PaymentDataCollectionEntity;

$BrasPag = new BrasPag;


$orderDataEntity = new OrderDataEntity;
$orderDataEntity
	->setMerchantId('MerchantId')
	->setOrderId('456798');

$customerDataEntity = new CustomerDataEntity;
$customerDataEntity
	->setCustomerIdentity('38827243828')
	->setCustomerName('Alexandre Oliveira')
	->setCustomerEmail('alexandre.oliveira@e-htl.com.br');


$paymentDataRequestEntity = new PaymentDataRequestEntity;
$paymentDataRequestEntity
	->setPaymentMethod('997')
	->setAmount('100')
	->setNumberOfPayments(1)
	->setPaymentPlan(1)
	->setTransactionType(1)
	->setCardHolder('Comprador Teste')
	->setCardNumber('0000000000000001')
	->setCardSecurityCode('111')
	->setCardExpirationDate('07/2017');

$paymentDataCollectionEntity = (new PaymentDataCollectionEntity())->setPaymentDataRequest($paymentDataRequestEntity);

$authorizeTransactionEntity = new AuthorizeTransactionEntity;
$authorizeTransactionEntity
	->setOrderData($orderDataEntity)
	->setCustomerData($customerDataEntity)
	->setPaymentDataCollection($paymentDataCollectionEntity);

$BrasPag->authorizeTransaction($authorizeTransactionEntity);
