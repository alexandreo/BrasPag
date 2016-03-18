<?php 
namespace Alexandreo\Entity\Customer;

use Alexandreo\Contracts\Customer\CustomerDataContracts;
use Alexandreo\Contracts\Customer\CustomerAddressDataContracts;
use Alexandreo\Contracts\Customer\CustomerDeliveryAddressDataContracts;

class CustomerDataEntity implements CustomerDataContracts
{

	private $identity;

	private $identityType;

	private $customerName;

	private $customerEmail;

	private $birthDate;

	private $customerAddressDataContracts;

	private $customerDeliveryAddressDataContracts;

	public function setCustomerIdentity($identity)
	{
		$this->identity = $identity;
	}

	public function setCustomerIdentityType($identityType)
	{
		$this->identityType = $identityType;
	}

	public function setCustomerName($customerName)
	{
		$this->customerName = $customerName;
	}

	public function setCustomerEmail($email)
	{
		$this->email = $email;
	}

	public function setBirthDate($birthDate)
	{
		$this->birthDate = $birthDate;
	}

	public function setCustomerAddressData(CustomerAddressDataContracts $customerAddressDataContracts)
	{
		$this->customerAddressDataContracts = $customerAddressDataContracts;
	}

	public function setCustomerDeliveryAddressData(CustomerDeliveryAddressDataContracts $customerDeliveryAddressDataContracts)
	{
		$this->customerDeliveryAddressDataContracts = $customerDeliveryAddressDataContracts;		
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