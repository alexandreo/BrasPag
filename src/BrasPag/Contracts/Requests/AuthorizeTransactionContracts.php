<?php 
namespace Alexandreo\Contracts\Requests;

use Alexandreo\Contracts\Order\OrderDataContracts;
use Alexandreo\Contracts\Customer\CustomerDataContracts;
use Alexandreo\Contracts\Payment\PaymentDataCollectionContracts;

interface AuthorizeTransactionContracts
{

	public function setRequestId($requestId);

	public function setVersion($version);

	public function setOrderData(OrderDataContracts $orderDataContracts);

	public function setCustomerData(CustomerDataContracts $customerDataContracts);

	public function setPaymentDataCollection(PaymentDataCollectionContracts $paymentDataCollectionContracts);

	public function getRequestId();

	public function getVersion();

	public function getOrderData();

	public function getCustomerData();

	public function getPaymentDataCollection();
	
}