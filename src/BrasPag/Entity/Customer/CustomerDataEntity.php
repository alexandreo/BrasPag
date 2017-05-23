<?php 
namespace Alexandreo\Entity\Customer;

use Alexandreo\Contracts\Customer\CustomerDataContracts;
use Alexandreo\Contracts\Customer\CustomerAddressDataContracts;
use Alexandreo\Contracts\Customer\CustomerDeliveryAddressDataContracts;

class CustomerDataEntity implements CustomerDataContracts
{

	/*
	* CPF
	*/
	private $identity;

	private $identityType;

	private $customerName;

	private $customerEmail;

	private $birthDate;

	private $customerAddressDataContracts = '';

	private $customerDeliveryAddressDataContracts = '';

	public function setCustomerIdentity($identity)
	{
		$this->identity = $identity;
		return $this;
	}

	public function setCustomerIdentityType($identityType)
	{
		$this->identityType = $identityType;
		return $this;
	}

	public function setCustomerName($customerName)
	{
		$this->customerName = $customerName;
		return $this;
	}

	public function setCustomerEmail($customerEmail)
	{
		$this->customerEmail = $customerEmail;
		return $this;
	}

	public function setBirthDate($birthDate)
	{
		$this->birthDate = $birthDate;
		return $this;
	}

	public function setCustomerAddressData(CustomerAddressDataContracts $customerAddressDataContracts)
	{
		$this->customerAddressDataContracts = $customerAddressDataContracts;
		return $this;
	}

	public function setCustomerDeliveryAddressData(CustomerDeliveryAddressDataContracts $customerDeliveryAddressDataContracts)
	{
		$this->customerDeliveryAddressDataContracts = $customerDeliveryAddressDataContracts;
		return $this;		
	}

	public function getCustomerIdentity()
	{
		return $this->identity;
	}

	public function getCustomerIdentityType()
	{
		return $this->identityType;
	}

	public function getCustomerName()
	{
		return $this->customerName;
	}

	public function getCustomerEmail()
	{
		return $this->customerEmail;
	}

	public function getBirthDate()
	{
		return $this->birthDate;
	}

	public function getCustomerAddressData()
	{
		return $this->customerAddressDataContracts;
	}

	public function getCustomerDeliveryAddressData()
	{
		return $this->customerDeliveryAddressDataContracts;
	}

}