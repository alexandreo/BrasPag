<?php
namespace Alexandreo;

use Alexandreo\Constants\BrasPagSoapClient;
use Alexandreo\Soap\BrasPagClient;
use Alexandreo\Contracts\Requests\AuthorizeTransactionContracts;
use Alexandreo\Contracts\Requests\CaptureCreditCardTransactionContracts;
use Alexandreo\Contracts\Requests\RefundCreditCardTransactionContracts;
use Alexandreo\Contracts\Requests\VoidCreditCardTransactionContracts;
use Alexandreo\Contracts\Payment\CreditCardDataRequestContracts;
use StdClass;
use Soapvar;

class BrasPag
{

	private $brasPagClient = null;

	function __construct($envProducation = true)
	{
		$this->brasPagClient = new brasPagClient([
            'soap_version' => SOAP_1_2,
            'cache_wsdl'   => 1,
            "trace"        => 1
		], $envProducation);
	}

	/**
	 * [authorizeTransaction description]
	 * @param  AuthorizeTransactionContracts $authorizeTransaction [Obj que será serializado para XML]
	 * @return [obj]                                              [retorno braspag]
	 */
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

	/**
	 * [captureCreditCardTransaction description]
	 * @param  CaptureCreditCardTransactionContracts $captureCreditCardTransactionContracts [description]
	 * @return [type]                                                                       [description]
	 */
	public function captureCreditCardTransaction(CaptureCreditCardTransactionContracts $captureCreditCardTransactionContracts )
	{
		$request = new StdClass;

		$request->request = new StdClass;

		$request->request->RequestId = $captureCreditCardTransactionContracts->getRequestId();
		$request->request->Version = $captureCreditCardTransactionContracts->getVersion();
		$request->request->MerchantId = $captureCreditCardTransactionContracts->getMerchantId();

		$request->request->TransactionDataCollection = new StdClass;
		//TransactionDataCollection
		foreach ($captureCreditCardTransactionContracts->getTransactionDataCollection()->getTransactionDataRequest() as $transactionDataRequest) {
			$request->request->TransactionDataCollection->TransactionDataRequest = new StdClass;
			$request->request->TransactionDataCollection->TransactionDataRequest->BraspagTransactionId = $transactionDataRequest->getBraspagTransactionId();
			$request->request->TransactionDataCollection->TransactionDataRequest->Amount = $transactionDataRequest->getAmount();
			$request->request->TransactionDataCollection->TransactionDataRequest->ServiceTaxAmount = $transactionDataRequest->getServiceTaxAmount();
		}
		return $this->brasPagClient->captureCreditCardTransaction($request);
	}

	/**
	 * [refundCreditCardTransaction description]
	 * @param  RefundCreditCardTransactionContracts $refundCreditCardTransactionContracts [description]
	 * @return [type]                                                                     [description]
	 */
	public function refundCreditCardTransaction(RefundCreditCardTransactionContracts $refundCreditCardTransactionContracts)
	{
		$request = new StdClass;

		$request->request = new StdClass;

		$request->request->RequestId = $refundCreditCardTransactionContracts->getRequestId();
		$request->request->Version = $refundCreditCardTransactionContracts->getVersion();
		$request->request->MerchantId = $refundCreditCardTransactionContracts->getMerchantId();

		$request->request->TransactionDataCollection = new StdClass;
		//TransactionDataCollection
		foreach ($refundCreditCardTransactionContracts->getTransactionDataCollection()->getTransactionDataRequest() as $transactionDataRequest) {
			$request->request->TransactionDataCollection->TransactionDataRequest = new StdClass;
			$request->request->TransactionDataCollection->TransactionDataRequest->BraspagTransactionId = $transactionDataRequest->getBraspagTransactionId();
			$request->request->TransactionDataCollection->TransactionDataRequest->Amount = $transactionDataRequest->getAmount();
			$request->request->TransactionDataCollection->TransactionDataRequest->ServiceTaxAmount = $transactionDataRequest->getServiceTaxAmount();
		}
		return $this->brasPagClient->refundCreditCardTransaction($request);
	}

	/**
	 * [voidCreditCardTransaction description]
	 * @param  VoidCreditCardTransactionContracts $voidCreditCardTransactionContracts [description]
	 * @return [type]                                                                 [description]
	 */
	public function voidCreditCardTransaction(VoidCreditCardTransactionContracts $voidCreditCardTransactionContracts)
	{
		$request = new StdClass;

		$request->request = new StdClass;

		$request->request->RequestId = $voidCreditCardTransactionContracts->getRequestId();
		$request->request->Version = $voidCreditCardTransactionContracts->getVersion();
		$request->request->MerchantId = $voidCreditCardTransactionContracts->getMerchantId();

		$request->request->TransactionDataCollection = new StdClass;
		//TransactionDataCollection
		foreach ($voidCreditCardTransactionContracts->getTransactionDataCollection()->getTransactionDataRequest() as $transactionDataRequest) {
			$request->request->TransactionDataCollection->TransactionDataRequest = new StdClass;
			$request->request->TransactionDataCollection->TransactionDataRequest->BraspagTransactionId = $transactionDataRequest->getBraspagTransactionId();
			$request->request->TransactionDataCollection->TransactionDataRequest->Amount = $transactionDataRequest->getAmount();
			$request->request->TransactionDataCollection->TransactionDataRequest->ServiceTaxAmount = $transactionDataRequest->getServiceTaxAmount();
		}
		return $this->brasPagClient->voidCreditCardTransaction($request);
	}

	/**
	 * [log description]
	 * @return [array] [retorna o request e reponse da action chamada]
	 */
	public function log()
	{
		return [
			'request' => $this->brasPagClient->xmlRequest,
			'reponse' => $this->brasPagClient->xmlReponse,
		];
	}

}
