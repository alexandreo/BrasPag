<?php
namespace Alexandreo\Entity\Requests;

use Alexandreo\Helpers;
use Alexandreo\Contracts\Requests\VoidCreditCardTransactionContracts;
use Alexandreo\Contracts\Transaction\TransactionDataCollectionContracts;

class VoidCreditCardTransactionEntity implements VoidCreditCardTransactionContracts
{

	private $requestId;

	private $version = '1.0';

	private $merchantId;

	private $transactionDataCollectionContracts;

	public function setRequestId($requestId)
	{
		$this->requestId = $requestId;
		return $this;
	}

	public function setVersion($version)
	{
		$this->version = $version;
		return $this;
	}

	public function setMerchantId($merchantId)
	{
		$this->merchantId = $merchantId;
		return $this;
	}

	public function setTransactionDataCollection(TransactionDataCollectionContracts $transactionDataCollectionContracts)
	{
		$this->transactionDataCollectionContracts = $transactionDataCollectionContracts;
		return $this;
	}

	public function getRequestId()
	{
		if (!empty($this->requestId))
			return $this->requestId;
		else 
			return Helpers::genereteResquestId();
	}

	public function getVersion()
	{
		return $this->version;
	}

	public function getMerchantId()
	{
		return $this->merchantId;
	}

	public function getTransactionDataCollection()
	{
		return $this->transactionDataCollectionContracts;
	}

}