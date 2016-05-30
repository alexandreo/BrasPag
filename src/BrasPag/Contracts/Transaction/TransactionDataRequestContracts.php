<?php 
namespace Alexandreo\Contracts\Transaction;

interface TransactionDataRequestContracts
{

	public function setBraspagTransactionId($braspagTransactionId);

	public function setAmount($amount);

	public function setServiceTaxAmount($serviceTaxAmount);

	public function getBraspagTransactionId();

	public function getAmount();

	public function getServiceTaxAmount();

}