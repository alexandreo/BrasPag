<?php

namespace Alexandreo\Soap\Factories\CreditCard;

use Alexandreo\Constants\BrasPagSoapClient;
use StdClass;
use SoapVar;
use Alexandreo\Contracts\Requests\AuthorizeTransactionContracts;

class AuthorizeTransactionFactory
{
    //temp file to add in antiffraude..
    public function make(AuthorizeTransactionContracts $authorizeTransaction)
    {
        $request = new StdClass;

        //Request
        $request->RequestId = $authorizeTransaction->getRequestId();
        $request->Version = $authorizeTransaction->getVersion();
        //OrderData
        $request->OrderData = new StdClass;
        $request->OrderData->MerchantId = $authorizeTransaction->getOrderData()->getMerchantId();
        $request->OrderData->OrderId = $authorizeTransaction->getOrderData()->getOrderId();
        $request->OrderData->BraspagOrderId = new SoapVar($authorizeTransaction->getOrderData()->getBraspagOrderId(), SOAP_ENC_OBJECT, 'true');
        //CustomerData
        $request->CustomerData = new StdClass;
        $request->CustomerData->CustomerIdentity = $authorizeTransaction->getCustomerData()->getCustomerIdentity();
        $request->CustomerData->CustomerName = $authorizeTransaction->getCustomerData()->getCustomerName();
        $request->CustomerData->CustomerEmail = $authorizeTransaction->getCustomerData()->getCustomerEmail();
        $request->CustomerData->CustomerAddressData = new SoapVar($authorizeTransaction->getCustomerData()->getCustomerAddressData(), SOAP_ENC_OBJECT, 'true');
        $request->CustomerData->DeliveryAddressData = new SoapVar($authorizeTransaction->getCustomerData()->getCustomerDeliveryAddressData(), SOAP_ENC_OBJECT, 'true');
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
        $request->PaymentDataCollection = new StdClass;
        $request->PaymentDataCollection->PaymentDataRequest = new SoapVar($Payment, SOAP_ENC_OBJECT, $PaymentType->getPaymentType());

        return $request;
    }

}