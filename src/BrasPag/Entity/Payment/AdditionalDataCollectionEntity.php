<?php 
namespace Alexandreo\Entity\Payment;

use Alexandreo\Contracts\Payment\AdditionalDataCollectionContracts;

class AdditionalDataCollectionEntity implements AdditionalDataCollectionContracts
{

	private $additionalDataRequest;

	public function setAdditionalDataRequest(array $additionalDataRequest)
	{
		$this->additionalDataRequest = $additionalDataRequest;
		return $this; 
	}

	public function getAdditionalDataRequest()
	{
		return $this->additionalDataRequest;
	}

}