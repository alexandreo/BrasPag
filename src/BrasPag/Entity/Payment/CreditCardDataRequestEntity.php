<?php 
namespace Alexandreo\Entity\Payment;

use Alexandreo\Contracts\Payment\CreditCardDataRequestContracts;

class CreditCardDataRequestEntity implements CreditCardDataRequestContracts
{

	private $numberOfPayments = 1;

	private $paymentPlan;

	private $transactionType;

	private $cardHolder;

	private $cardNumber;

	private $cardSecurityCode;

	private $cardExpirationDate;

	public function getPaymentType()
	{
		return 'CreditCardDataRequest';
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

}