<?php 
namespace Alexandreo;

use Alexandreo\Soap\BrasPagClient;
use Alexandreo\Contracts\Requests\AuthorizeTransactionContracts;
use Alexandreo\Contracts\Payment\CreditCardDataRequestContracts;
use StdClass;
use Soapvar;
use Alexandreo\Constants\BrasPagSoapClient;

class BrasPag 
{

	private $brasPagClient = null;

	function __construct()
	{
		$this->brasPagClient = new brasPagClient([
            'soap_version' => SOAP_1_2,
            'cache_wsdl'   => 1,
            "trace"        => 1
		]);
	}

	public function authorizeTransaction(AuthorizeTransactionContracts $authorizeTransaction)
	{
		$request = new StdClass;
		
		$request->request = new StdClass;
		//Request
		$request->request->RequestId = $authorizeTransaction->getRequestId();
		$request->request->Version = $authorizeTransaction->getVersion();
		//OrderData
		$request->request->OrderData = new StdClass;
		$request->request->OrderData->MerchantId = $authorizeTransaction->getOrderData()->getMerchantId();
		$request->request->OrderData->OrderId = $authorizeTransaction->getOrderData()->getOrderId();
		$request->request->OrderData->BraspagOrderId = new SoapVar($authorizeTransaction->getOrderData()->getBraspagOrderId(), SOAP_ENC_OBJECT, 'true');
		//CustomerData
		$request->request->CustomerData = new StdClass;
		$request->request->CustomerData->CustomerIdentity = $authorizeTransaction->getCustomerData()->getCustomerIdentity();
		$request->request->CustomerData->CustomerName = $authorizeTransaction->getCustomerData()->getCustomerName();
		$request->request->CustomerData->CustomerEmail = $authorizeTransaction->getCustomerData()->getCustomerEmail();
		$request->request->CustomerData->CustomerAddressData = new SoapVar($authorizeTransaction->getCustomerData()->getCustomerAddressData(), SOAP_ENC_OBJECT, 'true');
		$request->request->CustomerData->DeliveryAddressData = new SoapVar($authorizeTransaction->getCustomerData()->getCustomerDeliveryAddressData(), SOAP_ENC_OBJECT, 'true');
		$authorizeTransaction->getCustomerData()->getCustomerDeliveryAddressData();
		//PaymentDataCollection
		$Payment = new StdClass; 
		$Payment->PaymentMethod = new SoapVar($authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getPaymentMethod(), XSD_INT, null, null, 'PaymentMethod', BrasPagSoapClient::NAMESPACE);
		$Payment->Amount = new SoapVar($authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getAmount(), XSD_INT, null, null, 'Amount', BrasPagSoapClient::NAMESPACE);
		$Payment->Currency = new SoapVar($authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getCurrency(), XSD_STRING, null, null, 'Currency', BrasPagSoapClient::NAMESPACE );
		$Payment->Country = new SoapVar($authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getCountry(), XSD_STRING, null, null, 'Country', BrasPagSoapClient::NAMESPACE );
		
		$PaymentType = $authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getObjPaymentType();
		if ($PaymentType instanceof CreditCardDataRequestContracts){
			$Payment->NumberOfPayments = new SoapVar($PaymentType->getNumberOfPayments(), XSD_STRING, null, null, 'Number', BrasPagSoapClient::NAMESPACE );
			$Payment->PaymentPlan = new SoapVar($PaymentType->getPaymentPlan(), XSD_STRING, null, null, 'PaymentPlan', BrasPagSoapClient::NAMESPACE );
			$Payment->TransactionType = new SoapVar($PaymentType->getTransactionType(), XSD_STRING, null, null, 'TransactionType', BrasPagSoapClient::NAMESPACE );
			$Payment->CardHolder = new SoapVar($PaymentType->getCardHolder(), XSD_STRING, null, null, 'CardHolder', BrasPagSoapClient::NAMESPACE );
			$Payment->CardNumber = new SoapVar($PaymentType->getCardNumber(), XSD_STRING, null, null, 'CardNumber', BrasPagSoapClient::NAMESPACE );
			$Payment->CardSecurityCode = new SoapVar($PaymentType->getCardSecurityCode(), XSD_STRING, null, null, 'CardSecurityCode', BrasPagSoapClient::NAMESPACE );
			$Payment->CardExpirationDate = new SoapVar($PaymentType->getCardExpirationDate(), XSD_STRING, null, null, 'CardSecurityCode', BrasPagSoapClient::NAMESPACE );
		}

		$Payment->AdditionalDataCollection = new SoapVar($authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getAdditionalDataCollection(), SOAP_ENC_OBJECT, 'true', NULL, NULL, BrasPagSoapClient::NAMESPACE);
		$Payment->AffiliationData = new SoapVar($authorizeTransaction->getPaymentDataCollection()->getPaymentDataRequest()->getAffiliationData(), SOAP_ENC_OBJECT, 'true', NULL, NULL, BrasPagSoapClient::NAMESPACE);
		$request->request->PaymentDataCollection = new StdClass;
		$request->request->PaymentDataCollection->PaymentDataRequest = new SoapVar($Payment, SOAP_ENC_OBJECT, $PaymentType->getPaymentType());
		
		return $this->brasPagClient->authorizeTransaction($request);
	}

}