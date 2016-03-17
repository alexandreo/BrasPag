<?php 
namespace Alexandreo\Entity\AuthorizeTransaction;

use Alexandreo\Contracts\Order\OrderDataContracts;
use Alexandreo\Contracts\Customer\CustomerDataContracts;
use Alexandreo\Contracts\Payment\PaymentDataCollectionContracts;

interface AuthorizeTransactionEntity
{

	public function setRequestId($requestId);

	public function setVersion($version);

	public function setOrderData(OrderDataContracts $orderDataContracts);

	public function setCustomerData(CustomerDataContracts $customerDataContracts);

	public function setPaymentDataCollection(PaymentDataCollectionContracts $paymentDataCollectionContracts);
	
}