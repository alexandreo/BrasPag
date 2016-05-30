<?php 
namespace Alexandreo\Entity\Transaction;

use Alexandreo\Contracts\Transaction\TransactionDataCollectionContracts;
use Alexandreo\Contracts\Transaction\TransactionDataRequestContracts;


class TransactionDataCollectionEntity implements TransactionDataCollectionContracts
{

	private $transactionDataRequestArray = [];

	public function setTransactionDataRequest(TransactionDataRequestContracts $transactionDataRequest)
	{
		$this->transactionDataRequestArray[] = $transactionDataRequest;
		return $this;
	}

	public function getTransactionDataRequest()
	{
		return $this->transactionDataRequestArray;
	}

}