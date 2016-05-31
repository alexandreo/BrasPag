<?php
require_once '../vendor/autoload.php';

use Alexandreo\BrasPag;
use Alexandreo\Entity\Requests\VoidCreditCardTransactionEntity;
use Alexandreo\Entity\Transaction\TransactionDataRequestEntity;
use Alexandreo\Entity\Transaction\TransactionDataCollectionEntity;

$BrasPag = new BrasPag;

$transactionDataRequestEntity = new TransactionDataRequestEntity;
$transactionDataRequestEntity
	->setBraspagTransactionId('09665ce4-a578-439f-9bbc-7f5f6dead5a3')
	->setAmount('110');
//u can set mutiples datas..
$transactionDataCollectionEntity = new TransactionDataCollectionEntity;
$transactionDataCollectionEntity
	->setTransactionDataRequest($transactionDataRequestEntity);
//mount request soap..
$voidCreditCardTransactionEntity = new VoidCreditCardTransactionEntity;
$voidCreditCardTransactionEntity
	->setMerchantId('you MerchantId')
	->setTransactionDataCollection($transactionDataCollectionEntity);

$voidCreditCardTransaction = $BrasPag->voidCreditCardTransaction($voidCreditCardTransactionEntity);

dd($voidCreditCardTransaction);