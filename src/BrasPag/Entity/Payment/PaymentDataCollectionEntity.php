<?php 
namespace Alexandreo\Entity\Payment;

use Alexandreo\Contracts\Payment\PaymentDataCollectionContracts;
use Alexandreo\Contracts\Payment\PaymentDataRequestContracts;

class PaymentDataCollectionEntity implements PaymentDataCollectionContracts
{
	private $paymentDataRequestContracts;

	public function setPaymentDataRequest(PaymentDataRequestContracts $paymentDataRequestContracts)
	{
		$this->paymentDataRequestContracts = $paymentDataRequestContracts;
		return $this;
	}

	public function getPaymentDataRequest()
	{
		return $this->paymentDataRequestContracts;
	}

}