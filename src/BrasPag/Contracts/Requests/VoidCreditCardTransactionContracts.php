<?php 
namespace Alexandreo\Contracts\Requests;

use Alexandreo\Contracts\Transaction\TransactionDataCollectionContracts;

interface VoidCreditCardTransactionContracts
{

	public function setRequestId($requestId);

	public function setVersion($version);

	public function setMerchantId($merchantId);

	public function setTransactionDataCollection(TransactionDataCollectionContracts $transactionDataCollectionContracts);

	public function getRequestId();

	public function getVersion();

	public function getMerchantId();

	public function getTransactionDataCollection();
	
}