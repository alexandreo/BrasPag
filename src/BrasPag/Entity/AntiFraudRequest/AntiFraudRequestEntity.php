<?php

namespace Alexandreo\Entity\AntiFraudRequest;

use Alexandreo\Contracts\AntiFraudRequest\AdditionalDataCollectionContracts;
use Alexandreo\Contracts\AntiFraudRequest\AntiFraudRequestContracts;
use Alexandreo\Contracts\AntiFraudRequest\BankInfoDataContracts;
use Alexandreo\Contracts\AntiFraudRequest\BillToDataContracts;
use Alexandreo\Contracts\AntiFraudRequest\CardDataContracts;
use Alexandreo\Contracts\AntiFraudRequest\DecisionManagerDataContracts;
use Alexandreo\Contracts\AntiFraudRequest\FundTransferDataContracts;
use Alexandreo\Contracts\AntiFraudRequest\InvoiceHeaderDataContracts;
use Alexandreo\Contracts\AntiFraudRequest\ItemDataCollectionContracts;
use Alexandreo\Contracts\AntiFraudRequest\MerchantDefinedDataContracts;
use Alexandreo\Contracts\AntiFraudRequest\PurchaseTotalsDataContracts;
use Alexandreo\Contracts\AntiFraudRequest\ShipToDataContracts;

/**
 * Class AntiFraudRequestEntity
 * @package Alexandreo\Entity\AntiFraudRequest
 */
class AntiFraudRequestEntity implements AntiFraudRequestContracts
{

    /**
     * @var
     */
    private $bankInfoData;

    /**
     * @var
     */
    private $billToData;

    /**
     * @var
     */
    private $businessRulesScoreThreshold;

    /**
     * @var
     */
    private $cardData;

    /**
     * @var
     */
    private $comments;

    /**
     * @var
     */
    private $decisionManagerData;

    /**
     * @var
     */
    private $fundTransferData;

    /**
     * @var
     */
    private $invoiceHeaderData;

    /**
     * @var
     */
    private $itemDataCollection;

    /**
     * @var
     */
    private $merchantDefinedData;

    /**
     * @var
     */
    private $merchantReferenceCode;

    /**
     * @var
     */
    private $purchaseTotalsData;

    /**
     * @var
     */
    private $shipToData;

    /**
     * @var
     */
    private $deviceFingerPrintId;

    /**
     * @var
     */
    private $additionalDataCollection;

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\BankInfoDataContracts $bankInfoData
     * @return mixed
     */
    public function setBankInfoData(BankInfoDataContracts $bankInfoData)
    {
        $this->bankInfoData = $bankInfoData;
        return $this;
    }

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\BillToDataContracts $billToData
     * @return mixed
     */
    public function setBillToData(BillToDataContracts $billToData)
    {
        $this->billToData = $billToData;
        return $this;
    }

    /**
     * @param $businessRulesScoreThreshold
     * @return mixed
     */
    public function setBusinessRulesScoreThreshold($businessRulesScoreThreshold)
    {
        $this->businessRulesScoreThreshold = $businessRulesScoreThreshold;
        return $this;
    }

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\CardDataContracts $cardData
     * @return mixed
     */
    public function setCardData(CardDataContracts $cardData)
    {
        $this->cardData = $cardData;
        return $this;
    }

    /**
     * @param $comments
     * @return mixed
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @param DecisionManagerData $decisionManagerData
     * @return mixed
     */
    public function setDecisionManagerData(DecisionManagerDataContracts $decisionManagerData)
    {
        $this->decisionManagerData = $decisionManagerData;
        return $this;
    }

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\FundTransferDataContracts $fundTransferData
     * @return mixed
     */
    public function setFundTransferData(FundTransferDataContracts $fundTransferData)
    {
        $this->fundTransferData = $fundTransferData;
        return $this;
    }

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\InvoiceHeaderDataContracts $invoiceHeaderData
     * @return mixed
     */
    public function setInvoiceHeaderData(InvoiceHeaderDataContracts $invoiceHeaderData)
    {
        $this->invoiceHeaderData = $invoiceHeaderData;
        return $this;
    }

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\ItemDataCollectionContracts $itemDataCollection
     * @return mixed
     */
    public function setItemDataCollection(ItemDataCollectionContracts $itemDataCollection)
    {
        $this->itemDataCollection = $itemDataCollection;
        return $this;
    }

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\MerchantDefinedDataContracts $merchantDefinedData
     * @return mixed
     */
    public function setMerchantDefinedData(MerchantDefinedDataContracts $merchantDefinedData)
    {
        $this->merchantDefinedData = $merchantDefinedData;
        return $this;
    }

    /**
     * @param $merchantReferenceCode
     * @return mixed
     */
    public function setMerchantReferenceCode($merchantReferenceCode)
    {
        $this->merchantReferenceCode = $merchantReferenceCode;
        return $this;
    }

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\PurchaseTotalsDataContracts $purchaseTotalsData
     * @return mixed
     */
    public function setPurchaseTotalsData(PurchaseTotalsDataContracts $purchaseTotalsData)
    {
        $this->purchaseTotalsData = $purchaseTotalsData;
        return $this;
    }

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\ShipToDataContracts $shipToData
     * @return mixed
     */
    public function setShipToData(ShipToDataContracts $shipToData)
    {
        $this->shipToData = $shipToData;
        return $this;
    }

    /**
     * @param $deviceFingerPrintId
     * @return mixed
     */
    public function setDeviceFingerPrintId($deviceFingerPrintId)
    {
        $this->deviceFingerPrintId = $deviceFingerPrintId;
        return $this;
    }

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\AdditionalDataCollectionContracts $additionalDataCollection
     * @return mixed
     */
    public function setAdditionalDataCollection(AdditionalDataCollectionContracts $additionalDataCollection)
    {
        $this->additionalDataCollection = $additionalDataCollection;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankInfoData()
    {
        return $this->bankInfoData;
    }

    /**
     * @return mixed
     */
    public function getBillToData()
    {
        return $this->billToData;
    }

    /**
     * @return mixed
     */
    public function getBusinessRulesScoreThreshold()
    {
        return $this->businessRulesScoreThreshold;
    }

    /**
     * @return mixed
     */
    public function getCardData()
    {
        return $this->cardData;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @return mixed
     */
    public function getDecisionManagerData()
    {
        return $this->decisionManagerData;
    }

    /**
     * @return mixed
     */
    public function getFundTransferData()
    {
        return $this->fundTransferData;
    }

    /**
     * @return mixed
     */
    public function getInvoiceHeaderData()
    {
        return $this->invoiceHeaderData;
    }

    /**
     * @return mixed
     */
    public function getItemDataCollection()
    {
        return $this->itemDataCollection;
    }

    /**
     * @return mixed
     */
    public function getMerchantDefinedData()
    {
        return $this->merchantDefinedData;
    }

    /**
     * @return mixed
     */
    public function getMerchantReferenceCode()
    {
        return $this->merchantReferenceCode;
    }

    /**
     * @return mixed
     */
    public function getPurchaseTotalsData()
    {
        return $this->purchaseTotalsData;
    }

    /**
     * @return mixed
     */
    public function getShipToData()
    {
        return $this->shipToData;
    }

    /**
     * @return mixed
     */
    public function getDeviceFingerPrintId()
    {
        return $this->deviceFingerPrintId;
    }

    /**
     * @return mixed
     */
    public function getAdditionalDataCollection()
    {
        return $this->additionalDataCollection;
    }
}