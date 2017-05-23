<?php 
namespace Alexandreo\Contracts\Transaction;

use Alexandreo\Contracts\Transaction\TransactionDataRequestContracts;

interface TransactionDataCollectionContracts
{

	public function setTransactionDataRequest(TransactionDataRequestContracts $transactionDataRequest);

	public function getTransactionDataRequest();

}