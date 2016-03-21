<?php 
namespace Alexandreo;

use Alexandreo\Soap\BrasPagClient;
use Alexandreo\Contracts\Requests\AuthorizeTransactionContracts;
use StdClass;

class BrasPag 
{

	private $brasPagClient = null;

	function __construct()
	{
		$this->brasPagClient = new brasPagClient();
	}


	public function authorizeTransaction(AuthorizeTransactionContracts $authorizeTransaction)
	{
		$request = new StdClass;
		
		$request->request = new StdClass;
		$request->request->RequestId = $authorizeTransaction->getRequestId();
		$request->request->Version = $authorizeTransaction->getVersion();
		//OrderData
		$request->request->OrderData = new StdClass;
		$request->request->OrderData->MerchantId = $authorizeTransaction->getOrderData()->getMerchantId();
		$request->request->OrderData->OrderId = $authorizeTransaction->getOrderData()->getOrderId();
		$request->request->OrderData->BraspagOrderId = $authorizeTransaction->getOrderData()->getBraspagOrderId();
		//CustomerData
		$request->request->CustomerData = new StdClass;
		$request->request->CustomerData->CustomerIdentity = $authorizeTransaction->getCustomerData()->getCustomerIdentity();
		$request->request->CustomerData->CustomerName = $authorizeTransaction->getCustomerData()->getCustomerName();
		$request->request->CustomerData->CustomerEmail = $authorizeTransaction->getCustomerData()->getCustomerEmail();
		$request->request->CustomerData->CustomerAddressData = $authorizeTransaction->getCustomerData()->getCustomerAddressData();
		$request->request->CustomerData->DeliveryAddressData = $authorizeTransaction->getCustomerData()->getCustomerDeliveryAddressData();
		//PaymentDataCollection
		$request->request->PaymentDataCollection = new StdClass;
		$request->request->PaymentDataCollection->PaymentDataRequest = new StdClass;
		$request->request->PaymentDataCollection->PaymentDataRequest->PaymentMethod = $authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getPaymentMethod();
		$request->request->PaymentDataCollection->PaymentDataRequest->Amount = $authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getAmount();
		$request->request->PaymentDataCollection->PaymentDataRequest->Currency = $authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getCurrency();
		$request->request->PaymentDataCollection->PaymentDataRequest->Country = $authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getCountry();


		
		$request->request->PaymentDataCollection->PaymentDataRequest->Number = $authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getNumberOfPayments();
		// $request->request->PaymentDataCollection->PaymentDataRequest->PaymentPlan = $authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getPaymentPlan();
		// $request->request->PaymentDataCollection->PaymentDataRequest->TransactionType = $authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getTransactionType();
		// $request->request->PaymentDataCollection->PaymentDataRequest->CardHolder = $authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getCardHolder();
		// $request->request->PaymentDataCollection->PaymentDataRequest->CardNumber = $authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getCardNumber();
		// $request->request->PaymentDataCollection->PaymentDataRequest->CardSecurityCode = $authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getCardSecurityCode();
		// $request->request->PaymentDataCollection->PaymentDataRequest->CardExpirationDate = $authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getCardExpirationDate();

		$teste = $this->brasPagClient->AuthorizeTransaction($request);
		var_dump($request);
	}

}