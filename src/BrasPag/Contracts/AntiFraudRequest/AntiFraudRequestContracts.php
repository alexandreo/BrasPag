<?php 
namespace Alexandreo\Contracts\AntiFraudRequest;

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
use Alexandreo\Contracts\AntiFraudRequest\AdditionalDataCollectionContracts;

/**
 * Interface AntiFraudRequestContracts
 * @package Alexandreo\Contracts\AntiFraudRequest
 */
interface AntiFraudRequestContracts
{

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\BankInfoDataContracts $bankInfoData
     * @return mixed
     */
    public function setBankInfoData(BankInfoDataContracts $bankInfoData);

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\BillToDataContracts $billToData
     * @return mixed
     */
    public function setBillToData(BillToDataContracts $billToData);

    /**
     * @param $businessRulesScoreThreshold
     * @return mixed
     */
    public function setBusinessRulesScoreThreshold($businessRulesScoreThreshold);

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\CardDataContracts $cardData
     * @return mixed
     */
    public function setCardData(CardDataContracts $cardData);

    /**
     * @param $comments
     * @return mixed
     */
    public function setComments($comments);

    /**
     * @param DecisionManagerData $decisionManagerData
     * @return mixed
     */
    public function setDecisionManagerData(DecisionManagerDataContracts $decisionManagerData);

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\FundTransferDataContracts $fundTransferData
     * @return mixed
     */
    public function setFundTransferData(FundTransferDataContracts $fundTransferData);

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\InvoiceHeaderDataContracts $invoiceHeaderData
     * @return mixed
     */
    public function setInvoiceHeaderData(InvoiceHeaderDataContracts $invoiceHeaderData);

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\ItemDataCollectionContracts $itemDataCollection
     * @return mixed
     */
    public function setItemDataCollection(ItemDataCollectionContracts $itemDataCollection);

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\MerchantDefinedDataContracts $merchantDefinedData
     * @return mixed
     */
    public function setMerchantDefinedData(MerchantDefinedDataContracts $merchantDefinedData);

    /**
     * @param $merchantReferenceCode
     * @return mixed
     */
    public function setMerchantReferenceCode($merchantReferenceCode);

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\PurchaseTotalsDataContracts $purchaseTotalsData
     * @return mixed
     */
    public function setPurchaseTotalsData(PurchaseTotalsDataContracts $purchaseTotalsData);

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\ShipToDataContracts $shipToData
     * @return mixed
     */
    public function setShipToData(ShipToDataContracts $shipToData);

    /**
     * @param $deviceFingerPrintId
     * @return mixed
     */
    public function setDeviceFingerPrintId($deviceFingerPrintId);

    /**
     * @param \Alexandreo\Contracts\AntiFraudRequest\AdditionalDataCollectionContracts $additionalDataCollection
     * @return mixed
     */
    public function setAdditionalDataCollection(AdditionalDataCollectionContracts $additionalDataCollection);

    /**
     * @return mixed
     */
    public function getBankInfoData();

    /**
     * @return mixed
     */
    public function getBillToData();

    /**
     * @return mixed
     */
    public function getBusinessRulesScoreThreshold();

    /**
     * @return mixed
     */
    public function getCardData();

    /**
     * @return mixed
     */
    public function getComments();

    /**
     * @return mixed
     */
    public function getDecisionManagerData();

    /**
     * @return mixed
     */
    public function getFundTransferData();

    /**
     * @return mixed
     */
    public function getInvoiceHeaderData();

    /**
     * @return mixed
     */
    public function getItemDataCollection();

    /**
     * @return mixed
     */
    public function getMerchantDefinedData();

    /**
     * @return mixed
     */
    public function getMerchantReferenceCode();

    /**
     * @return mixed
     */
    public function getPurchaseTotalsData();

    /**
     * @return mixed
     */
    public function getShipToData();

    /**
     * @return mixed
     */
    public function getDeviceFingerPrintId();

    /**
     * @return mixed
     */
    public function getAdditionalDataCollection();

}