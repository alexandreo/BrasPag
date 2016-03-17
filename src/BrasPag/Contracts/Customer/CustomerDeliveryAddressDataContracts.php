<?php 
namespace Alexandreo\Contracts\Customer;

interface CustomerDeliveryAddressDataContracts
{

	public function setStreet($street);

	public function setNumber($number);

	public function setComplement($complement);

	public function setDistrict($district);

	public function setZipCode($zipCode);

	public function setCity($city);

	public function setState($state);

	public function setCountry($country);

	public function getStreet();

	public function getNumber();

	public function getComplement();

	public function getDistrict();

	public function getZipCode();

	public function getCity();

	public function getState();

	public function getCountry();

}