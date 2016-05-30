<?php 
namespace Alexandreo\Entity\Transaction;

use Alexandreo\Contracts\Transaction\TransactionDataRequestContracts;


class TransactionDataRequestEntity implements TransactionDataRequestContracts
{

	private $braspagTransactionId;

	private $amount;

	private $serviceTaxAmount;

	public function setBraspagTransactionId($braspagTransactionId)
	{
		$this->braspagTransactionId = $braspagTransactionId;
		return $this;
	}

	public function setAmount($amount)
	{
		$this->amount = $amount;
		return $this;
	}

	public function setServiceTaxAmount($serviceTaxAmount)
	{
		$this->serviceTaxAmount = $serviceTaxAmount;
		return $this;
	}

	public function getBraspagTransactionId()
	{
		return $this->braspagTransactionId;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function getServiceTaxAmount()
	{
		return $this->serviceTaxAmount;
	}

}