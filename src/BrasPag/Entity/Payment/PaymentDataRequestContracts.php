<?php 
namespace Alexandreo\Contracts\Payment;

use Alexandreo\Contracts\Payment\AdditionalDataCollectionContracts;
use Alexandreo\Contracts\Payment\AffiliationDataContracts;

interface PaymentDataRequestContracts
{

	public function setPaymentMethod($paymentMethod);

	public function setAmount($amount);

	public function setCurrency($currency);

	public function setCountry($country);

	public function setAdditionalDataCollection(AdditionalDataCollectionContracts $additionalDataCollectionContracts);
	
	public function setAffiliationData(AffiliationDataContracts $affiliationDataContracts);
	
	public function getPaymentMethod();

	public function getAmount();

	public function getCurrency();

	public function getCountry();

	public function getAdditionalDataCollection();
	
	public function getAffiliationData();

}