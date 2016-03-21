<?php 
namespace Alexandreo\Contracts\Customer;

use Alexandreo\Contracts\Customer\CustomerAddressDataContracts;
use Alexandreo\Contracts\Customer\CustomerDeliveryAddressDataContracts;

interface CustomerDataContracts
{

	public function setCustomerIdentity($identity);

	public function setCustomerIdentityType($identityType);

	public function setCustomerName($name);

	public function setCustomerEmail($email);

	public function setBirthDate($birthDate);

	public function setCustomerAddressData(CustomerAddressDataContracts $customerAddressDataContracts);

	public function setCustomerDeliveryAddressData(CustomerDeliveryAddressDataContracts $customerDeliveryAddressDataContracts);

	public function getCustomerIdentity();

	public function getCustomerIdentityType();

	public function getCustomerName();

	public function getCustomerEmail();

	public function getBirthDate();

	public function getCustomerAddressData();

	public function getCustomerDeliveryAddressData();

}