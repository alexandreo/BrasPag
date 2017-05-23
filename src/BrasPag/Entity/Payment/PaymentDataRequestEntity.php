<?php 
namespace Alexandreo\Entity\Payment;

use Alexandreo\Contracts\Payment\PaymentDataRequestContracts;
use Alexandreo\Contracts\Payment\AdditionalDataCollectionContracts;
use Alexandreo\Contracts\Payment\AffiliationDataContracts;
use Alexandreo\Contracts\Payment\PaymentTypeContract;

class PaymentDataRequestEntity implements PaymentDataRequestContracts
{

	private $paymentMethod;

	private $amount;

	private $currency = 'BRL';

	private $country = 'BRA';

	private $objPaymentType;

	private $additionalDataCollectionContracts = '';

	private $affiliationDataContracts = '';

	public function setObjPaymentType(PaymentTypeContract $objPaymentType)
	{
		$this->objPaymentType = $objPaymentType;
		return $this;		
	}

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

	public function getObjPaymentType()
	{
		return $this->objPaymentType;
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

	public function getAdditionalDataCollection()
	{
		return $this->additionalDataCollectionContracts;
	}
	
	public function getAffiliationData()
	{
		return $this->affiliationDataContracts;
	}

}