<?php 
namespace Alexandreo\Contracts\Payment;

interface AdditionalDataCollectionContracts
{

	public function setAdditionalDataRequest(array $additionalDataRequest);

	public function getAdditionalDataRequest();

}