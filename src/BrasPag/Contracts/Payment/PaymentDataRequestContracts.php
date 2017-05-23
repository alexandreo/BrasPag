<?php 
namespace Alexandreo\Contracts\Payment;

use Alexandreo\Contracts\Payment\AdditionalDataCollectionContracts;
use Alexandreo\Contracts\Payment\AffiliationDataContracts;
use Alexandreo\Contracts\Payment\PaymentTypeContract;

interface PaymentDataRequestContracts
{

	public function setObjPaymentType(PaymentTypeContract $objPaymentType);

	public function setPaymentMethod($paymentMethod);

	public function setAmount($amount);

	public function setCurrency($currency);

	public function setCountry($country);

	public function setAdditionalDataCollection(AdditionalDataCollectionContracts $additionalDataCollectionContracts);
	
	public function setAffiliationData(AffiliationDataContracts $affiliationDataContracts);
	
	public function getObjPaymentType();

	public function getPaymentMethod();

	public function getAmount();

	public function getCurrency();

	public function getCountry();

	public function getAdditionalDataCollection();
	
	public function getAffiliationData();

}