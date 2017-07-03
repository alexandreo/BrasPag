<?php

namespace Alexandreo\Soap\Factories\AntiFraude;

use Alexandreo\Contracts\AntiFraudRequest\AntiFraudRequestContracts;
use Alexandreo\Soap\Factories\AntiFraude\ItemDataFactory;
use Alexandreo\Soap\Factories\AntiFraude\AdditionalDataFactory;
use StdClass;

/**
 * Class AntiFraudRequestFactory
 * @package Alexandreo\Soap\Factories\AntiFraude
 */
class AntiFraudRequestFactory
{

    /**
     * @var StdClass
     */
    private $antiFraud;

    /**
     * @var AntiFraudRequestContracts
     */
    private $AntiFraudRequest;

    /**
     * AntiFraudRequestFactory constructor.
     * @param AntiFraudRequestContracts $AntiFraudRequest
     */
    function __construct(AntiFraudRequestContracts $AntiFraudRequest)
    {
        $this->antiFraud = new StdClass();
        $this->AntiFraudRequest = $AntiFraudRequest;
    }

    /**
     * @return StdClass
     */
    public function make()
    {
        $this->antiFraud->BankInfoData = $this->makeBankInfoData();
        $this->antiFraud->BillToData = $this->makeBillToData();
        $this->antiFraud->ItemDataCollection = $this->makeItemDataCollection();
        $this->antiFraud->MerchantReferenceCode = $this->AntiFraudRequest->getMerchantReferenceCode();

        if (!is_null($this->AntiFraudRequest->getCardData())) {
            $this->antiFraud->CardData = $this->makeCardData();
        }
        $this->antiFraud->Comments = $this->AntiFraudRequest->getComments();

        if (!is_null($this->AntiFraudRequest->getDecisionManagerData())) {
            $this->antiFraud->DecisionManagerData = $this->makeDecisionManagerData();
        }

        if (!is_null($this->AntiFraudRequest->getFundTransferData())) {
            $this->antiFraud->FundTransferData = $this->makeFundTransferData();
        }

        if (!is_null($this->AntiFraudRequest->getInvoiceHeaderData())) {
            $this->antiFraud->InvoiceHeaderData = $this->makeInvoiceHeaderData();
        }

        if (!is_null($this->AntiFraudRequest->getMerchantDefinedData())) {
            $this->antiFraud->MerchantDefinedData = $this->makeMerchantDefinedData();
        }

        if (!is_null($this->AntiFraudRequest->getPurchaseTotalsData())){
            $this->antiFraud->PurchaseTotalsData = $this->makePurchaseTotalsData();
        }

        if (!is_null($this->AntiFraudRequest->getShipToData())){
             $this->antiFraud->ShipToData = $this->makeShipToData();
        }

        $this->antiFraud->DeviceFingerPrintId = $this->AntiFraudRequest->getDeviceFingerPrintId();

        if (!is_null($this->AntiFraudRequest->getAdditionalDataCollection())) {
            $this->antiFraud->AdditionalDataCollection = $this->makeAdditionalDataCollection();
        }


        return $this->antiFraud;
    }

    /**
     * @return StdClass
     */
    private function makeBankInfoData()
    {
        $bankInfoData = new stdClass();
        if (!is_null($this->AntiFraudRequest->getBankInfoData())) {
            $bankInfoData->Address = $this->AntiFraudRequest->getBankInfoData()->getAddress();
            $bankInfoData->Code = $this->AntiFraudRequest->getBankInfoData()->getCode();
            $bankInfoData->BranchCode = $this->AntiFraudRequest->getBankInfoData()->getBranchCode();
            $bankInfoData->City = $this->AntiFraudRequest->getBankInfoData()->getCity();
            $bankInfoData->Country = $this->AntiFraudRequest->getBankInfoData()->getCountry();
            $bankInfoData->Name = $this->AntiFraudRequest->getBankInfoData()->getName();
            $bankInfoData->SwiftCode = $this->AntiFraudRequest->getBankInfoData()->getSwiftCode();
        }
        return $bankInfoData;
    }

    /**
     * @return StdClass
     */
    private function makeBillToData()
    {
        $billToData = new stdClass();
        if (!is_null($this->AntiFraudRequest->getBillToData())) {
            $billToData->City = $this->AntiFraudRequest->getBillToData()->getCity();
            $billToData->Country = $this->AntiFraudRequest->getBillToData()->getCountry();
            $billToData->CustomerId = $this->AntiFraudRequest->getBillToData()->getCustomerId();
            $billToData->DateOfBirth = $this->AntiFraudRequest->getBillToData()->getDateOfBirth();
            $billToData->Email = $this->AntiFraudRequest->getBillToData()->getEmail();
            $billToData->FirstName = $this->AntiFraudRequest->getBillToData()->getFirstName();
            $billToData->HostName = $this->AntiFraudRequest->getBillToData()->getHostName();
            $billToData->HttpBrowserCookiesAccepted = (bool)$this->AntiFraudRequest->getBillToData()->getHttpBrowserCookiesAccepted();
            $billToData->HttpBrowserEmail = $this->AntiFraudRequest->getBillToData()->getHttpBrowserEmail();
            $billToData->HttpBrowserType = $this->AntiFraudRequest->getBillToData()->getHttpBrowserType();
            $billToData->IpAddress = $this->AntiFraudRequest->getBillToData()->getIpAddress();
            $billToData->LastName = $this->AntiFraudRequest->getBillToData()->getLastName();
            $billToData->PhoneNumber = $this->AntiFraudRequest->getBillToData()->getPhoneNumber();
            $billToData->PostalCode = $this->AntiFraudRequest->getBillToData()->getPostalCode();
            $billToData->State = $this->AntiFraudRequest->getBillToData()->getState();
            $billToData->Street1 = $this->AntiFraudRequest->getBillToData()->getStreet1();
            $billToData->Street2 = $this->AntiFraudRequest->getBillToData()->getStreet2();
        }
        return $billToData;
    }


    /**
     * @return StdClass
     */
    private function makeItemDataCollection()
    {
        $itemDataCollection = new stdClass();
        if (!is_null($this->AntiFraudRequest->getItemDataCollection())) {
            $itemDataCollections = $this->AntiFraudRequest->getItemDataCollection()->getItemData();
            foreach ($itemDataCollections as $itemData){
                $itemDataCollection->ItemData[] = (new ItemDataFactory($itemData))->make();
            }
        }
        return $itemDataCollection;
    }

    /**
     * @return StdClass
     */
    private function makeCardData()
    {
        $cardData = new StdClass;
        if (!is_null($this->AntiFraudRequest->getCardData())) {
            $cardData->AccountNumber = $this->AntiFraudRequest->getCardData()->getAccountNumber();
            $cardData->Card = $this->AntiFraudRequest->getCardData()->getCard();
            $cardData->ExpirationMonth = $this->AntiFraudRequest->getCardData()->getExpirationMonth();
            $cardData->ExpirationYear = $this->AntiFraudRequest->getCardData()->getExpirationYear();
            $cardData->AccountToken = $this->AntiFraudRequest->getCardData()->getAccountToken();
            $cardData->AccountAlias = $this->AntiFraudRequest->getCardData()->getAccountAlias();
            $cardData->SaveAccountNumber = $this->AntiFraudRequest->getCardData()->getSaveAccountNumber();
        }
        return $cardData;
    }

    /**
     * @return stdClass
     */
    private function makeDecisionManagerData()
    {
        return (new TravelDataFactory($this->AntiFraudRequest->getDecisionManagerData()->getTravelData()))->make();
    }

    /**
     * @return FundTransferData
     */
    private function makeFundTransferData()
    {
        $fundTransferData = new FundTransferData;
        $fundTransferData->AccountName = $this->AntiFraudRequest->getFundTransferData()->getAccountName();
        $fundTransferData->AccountNumber = $this->AntiFraudRequest->getFundTransferData()->getAccountNumber();
        $fundTransferData->BankCheckDigit = $this->AntiFraudRequest->getFundTransferData()->getBankCheckDigit();
        $fundTransferData->Iban = $this->AntiFraudRequest->getFundTransferData()->getIban();
        return $fundTransferData;
    }

    /**
     * @return StdClass
     */
    private function makeInvoiceHeaderData()
    {
        $invoiceHeaderData = new stdClass;
        $invoiceHeaderData->IsGift = $this->AntiFraudRequest->getInvoiceHeaderData()->getIsGift();
        $invoiceHeaderData->MerchantDescriptor = $this->AntiFraudRequest->getInvoiceHeaderData()->getMerchantDescriptor();
        $invoiceHeaderData->ReturnsAccepted = $this->AntiFraudRequest->getInvoiceHeaderData()->getReturnsAccepted();
        $invoiceHeaderData->Tender = $this->AntiFraudRequest->getInvoiceHeaderData()->getTender();
        return $invoiceHeaderData;
    }

    /**
     * @return StdClass
     */
    private function makeMerchantDefinedData()
    {
        $merchantDefinedData = new stdClass();
        $merchantDefinedData->Field1 = $this->AntiFraudRequest->getMerchantDefinedData()->getField1();
        $merchantDefinedData->Field2 = $this->AntiFraudRequest->getMerchantDefinedData()->getField2();
        $merchantDefinedData->Field3 = $this->AntiFraudRequest->getMerchantDefinedData()->getField3();
        $merchantDefinedData->Field4 = $this->AntiFraudRequest->getMerchantDefinedData()->getField4();
        $merchantDefinedData->Field5 = $this->AntiFraudRequest->getMerchantDefinedData()->getField5();
        $merchantDefinedData->Field6 = $this->AntiFraudRequest->getMerchantDefinedData()->getField6();
        $merchantDefinedData->Field7 = $this->AntiFraudRequest->getMerchantDefinedData()->getField7();
        $merchantDefinedData->Field8 = $this->AntiFraudRequest->getMerchantDefinedData()->getField8();
        $merchantDefinedData->Field9 = $this->AntiFraudRequest->getMerchantDefinedData()->getField9();
        $merchantDefinedData->Field10 = $this->AntiFraudRequest->getMerchantDefinedData()->getField10();
        $merchantDefinedData->Field11 = $this->AntiFraudRequest->getMerchantDefinedData()->getField11();
        $merchantDefinedData->Field12 = $this->AntiFraudRequest->getMerchantDefinedData()->getField12();
        $merchantDefinedData->Field13 = $this->AntiFraudRequest->getMerchantDefinedData()->getField13();
        $merchantDefinedData->Field14 = $this->AntiFraudRequest->getMerchantDefinedData()->getField14();
        $merchantDefinedData->Field15 = $this->AntiFraudRequest->getMerchantDefinedData()->getField15();
        return $merchantDefinedData;
    }

    /**
     * @return StdClass
     */
    private function makePurchaseTotalsData()
    {
        $purchaseTotalsData = new stdClass;
        $purchaseTotalsData->Currency = $this->AntiFraudRequest->getPurchaseTotalsData()->getCurrency();
        $purchaseTotalsData->GrandTotalAmount = $this->AntiFraudRequest->getPurchaseTotalsData()->getGrandTotalAmount();
        return $purchaseTotalsData;
    }

    /**
     * @return StdClass
     */
    private function makeShipToData()
    {
        $shipToData = new stdClass;
        $shipToData->City = $this->AntiFraudRequest->getShipToData()->getCity();
        $shipToData->Country = $this->AntiFraudRequest->getShipToData()->getCountry();
        $shipToData->FirstName = $this->AntiFraudRequest->getShipToData()->getFirstName();
        $shipToData->LastName = $this->AntiFraudRequest->getShipToData()->getLastName();
        $shipToData->PhoneNumber = $this->AntiFraudRequest->getShipToData()->getPhoneNumber();
        $shipToData->PostalCode = $this->AntiFraudRequest->getShipToData()->getPostalCode();
        $shipToData->ShippingMethod = $this->AntiFraudRequest->getShipToData()->getShippingMethod();
        $shipToData->State = $this->AntiFraudRequest->getShipToData()->getState();
        $shipToData->Street1 = $this->AntiFraudRequest->getShipToData()->getStreet1();
        $shipToData->Street2 = $this->AntiFraudRequest->getShipToData()->getStreet2();
        return $shipToData;
    }

    /**
     * @return StdClass
     */
    private function makeAdditionalDataCollection()
    {
        $additionalDataCollection = new stdClass;
        if (!is_null($this->AntiFraudRequest->getAdditionalDataCollection())) {
            $additionalDataCollections = $this->AntiFraudRequest->getAdditionalDataCollection()->getAdditionalData();
            foreach ($additionalDataCollections as $additionalData){
                $additionalDataCollection->AdditionalData[] = (new AdditionalDataFactory($additionalData))->make();
            }
        }
        return $additionalDataCollection;
    }



}
