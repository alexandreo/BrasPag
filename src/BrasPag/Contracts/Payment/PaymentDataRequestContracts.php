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

	public function setNumberOfPayments($numberOfPayments);

	public function setPaymentPlan($paymentPlan);

	public function setTransactionType($transactionType);

	public function setCardHolder($cardHolder);

	public function setCardNumber($cardNumber);

	public function setCardSecurityCode($cardSecurityCode);

	public function setCardExpirationDate($cardExpirationDate);

	public function setAdditionalDataCollection(AdditionalDataCollectionContracts $additionalDataCollectionContracts);
	
	public function setAffiliationData(AffiliationDataContracts $affiliationDataContracts);
	
	public function getPaymentMethod();

	public function getAmount();

	public function getCurrency();

	public function getCountry();

	public function getNumberOfPayments();

	public function getPaymentPlan();

	public function getTransactionType();

	public function getCardHolder();

	public function getCardNumber();

	public function getCardSecurityCode();

	public function getCardExpirationDate();

	public function getAdditionalDataCollection();
	
	public function getAffiliationData();

}