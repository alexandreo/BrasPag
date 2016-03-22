<?php 
namespace Alexandreo\Entity\Requests;

use Alexandreo\Contracts\Requests\AuthorizeTransactionContracts;
use Alexandreo\Contracts\Order\OrderDataContracts;
use Alexandreo\Contracts\Customer\CustomerDataContracts;
use Alexandreo\Contracts\Payment\PaymentDataCollectionContracts;
use Alexandreo\Helpers;



class AuthorizeTransactionEntity implements AuthorizeTransactionContracts
{

	private $requestId;

	private $version = '1.0';

	private $orderDataContracts;

	private $customerDataContracts;

	private $paymentDataCollectionContracts;


	public function setRequestId($requestId)
	{
		$this->requestId = $requestId;
		return $this;
	}

	public function setVersion($version)
	{
		$this->requestId = $version;
		return $this;
	}

	public function setOrderData(OrderDataContracts $orderDataContracts)
	{
		$this->orderDataContracts = $orderDataContracts;
		return $this;
	}

	public function setCustomerData(CustomerDataContracts $customerDataContracts)
	{
		$this->customerDataContracts = $customerDataContracts;
		return $this;
	}

	public function setPaymentDataCollection(PaymentDataCollectionContracts $paymentDataCollectionContracts)
	{
		$this->paymentDataCollectionContracts = $paymentDataCollectionContracts;
		return $this;
	}

	public function getRequestId()
	{
		if (!empty($this->requestId))
			return $this->requestId;
		else 
			return Helpers::genereteResquestId();
	}

	public function getVersion()
	{
		return $this->version;
	}

	public function getOrderData()
	{
		return $this->orderDataContracts;
	}

	public function getCustomerData()
	{
		return $this->customerDataContracts;
	}

	public function getPaymentDataCollection()
	{
		return $this->paymentDataCollectionContracts;
	}
	
}