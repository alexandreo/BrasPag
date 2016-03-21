<?php 
namespace Alexandreo\Entity\Payment;

use Alexandreo\Contracts\Payment\PaymentDataRequestContracts;
use Alexandreo\Contracts\Payment\AdditionalDataCollectionContracts;
use Alexandreo\Contracts\Payment\AffiliationDataContracts;

class PaymentDataRequestEntity implements PaymentDataRequestContracts
{

	private $paymentMethod;

	private $amount;

	private $currency = 'BRL';

	private $country = 'BRA';

	private $numberOfPayments = 1;

	private $paymentPlan;

	private $TransactionType;

	private $cardHolder;

	private $cardNumber;

	private $cardSecurityCode;

	private $cardExpirationDate;

	private $additionalDataCollectionContracts;

	private $affiliationDataContracts;

	public function setPaymentMethod($paymentMethod)
	{
		$this->paymentMethod = $paymentMethod;
		return $this;
	}

	public function setAmount($amount)
	{
		$this->amount = $amount;
		return $this;
	}

	public function setCurrency($currency)
	{
		$this->currency = $currency;
		return $this;
	}

	public function setCountry($country)
	{
		$this->country = $country;
		return $this;
	}

	public function setNumberOfPayments($numberOfPayments)
	{
		$this->numberOfPayments = $numberOfPayments;
		return $this;
	}

	public function setPaymentPlan($paymentPlan)
	{
		$this->paymentPlan = $paymentPlan;
		return $this;
	}

	public function setTransactionType($transactionType)
	{
		$this->transactionType = $transactionType;
		return $this;
	}

	public function setCardHolder($cardHolder)
	{
		$this->cardHolder = $cardHolder;
		return $this;
	}

	public function setCardNumber($cardNumber)
	{
		$this->cardNumber = $cardNumber;
		return $this;
	}

	public function setCardSecurityCode($cardSecurityCode)
	{
		$this->cardSecurityCode = $cardSecurityCode;
		return $this;
	}

	public function setCardExpirationDate($cardExpirationDate)
	{
		$this->cardExpirationDate = $cardExpirationDate;
		return $this;
	}

	public function setAdditionalDataCollection(AdditionalDataCollectionContracts $additionalDataCollectionContracts)
	{
		$this->additionalDataCollectionContracts = $additionalDataCollectionContracts;
		return $this;
	}
	
	public function setAffiliationData(AffiliationDataContracts $affiliationDataContracts)
	{
		$this->affiliationDataContracts = $affiliationDataContracts;
		return $this;
	}
	
	public function getPaymentMethod()
	{
		return $this->paymentMethod;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function getCurrency()
	{
		return $this->currency;
	}

	public function getCountry()
	{
		return $this->country;
	}

	public function getNumberOfPayments()
	{
		return $this->numberOfPayments;
	}

	public function getPaymentPlan()
	{
		return $this->paymentPlan;
	}

	public function getTransactionType()
	{
		return $this->transactionType;
	}

	public function getCardHolder()
	{
		return $this->cardHolder;
	}

	public function getCardNumber()
	{
		return $this->cardNumber;
	}

	public function getCardSecurityCode()
	{
		return $this->cardSecurityCode;
	}

	public function getCardExpirationDate()
	{
		return $this->cardExpirationDate;
	}

	public function getAdditionalDataCollection()
	{
		return $this->additionalDataCollectionContracts;
	}
	
	public function getAffiliationData()
	{
		return $this->affiliationDataContracts;
	}

}