<?php 
namespace Alexandreo\Contracts\Payment;

use Alexandreo\Contracts\Payment\PaymentDataRequestContracts;

interface PaymentDataCollectionContracts
{

	public function setPaymentDataRequest(PaymentDataRequestContracts $paymentDataRequestContracts);

	public function getPaymentDataRequest();

}