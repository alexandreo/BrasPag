<?php 
namespace Alexandreo\Entity\Customer;

use Alexandreo\Contracts\Customer\CustomerDeliveryAddressDataContracts;

class CustomerDeliveryAddressDataEntity implements CustomerDeliveryAddressDataContracts
{

	private $street;

	private $number;

	private $complement;

	private $district;

	private $zipCode;

	private $city;

	private $state;

	private $country;

	public function setStreet($street)
	{
		$this->street = $street;
	}

	public function setNumber($number)
	{
		$this->number = $number;
	}

	public function setComplement($complement)
	{
		$this->complement = $complement;
	}

	public function setDistrict($district)
	{
		$this->district = $district;
	}

	public function setZipCode($zipCode)
	{
		$this->zipCode = $zipCode;
	}

	public function setCity($city)
	{
		$this->city = $city;
	}

	public function setState($state)
	{
		$this->state = $state;
	}

	public function setCountry($country)
	{
		$this->country = $country;
	}

	public function getStreet()
	{
		return $this->street;
	}

	public function getNumber()
	{
		return $this->number;
	}

	public function getComplement()
	{
		return $this->complement;
	}

	public function getDistrict()
	{
		return $this->district;
	}

	public function getZipCode()
	{
		return $this->zipCode;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function getState()
	{
		return $this->state;
	}

	public function getCountry()
	{
		return $this->country;
	}

}