<?php 
namespace Alexandreo\Contracts\Payment;

use Alexandreo\Contracts\Payment\PaymentTypeContract;

interface CreditCardDataRequestContracts extends PaymentTypeContract
{

	public function setNumberOfPayments($numberOfPayments);

	public function setPaymentPlan($paymentPlan);

	public function setTransactionType($transactionType);

	public function setCardHolder($cardHolder);

	public function setCardNumber($cardNumber);

	public function setCardSecurityCode($cardSecurityCode);

	public function setCardExpirationDate($cardExpirationDate);

	public function getNumberOfPayments();

	public function getPaymentPlan();

	public function getTransactionType();

	public function getCardHolder();

	public function getCardNumber();

	public function getCardSecurityCode();

	public function getCardExpirationDate();	

}