<?php 
namespace Alexandreo\Entity\Payment;

use Alexandreo\Contracts\AffiliationDataContracts;

class AffiliationDataEntity implements AffiliationDataContracts
{

	private $affiliationCode;

	private $affiliationKey;

	private $userName;

	private $password;

	private $signature;

	public function setAffiliationCode($affiliationCode)
	{
		$this->affiliationCode = $affiliationCode;
	}

	public function setAffiliationKey($affiliationKey)
	{
		$this->affiliationKey = $affiliationKey;
	}

	public function setUserName($userName)
	{
		$this->userName = $userName;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function setSignature($signature)
	{
		$this->signature = $signature;
	}

	public function getAffiliationCode()
	{
		$this->affiliationCode;
	}

	public function getAffiliationKey()
	{
		$this->affiliationKey;
	}

	public function getUserName()
	{
		$this->userName;
	}

	public function getPassword()
	{
		$this->password;
	}

	public function getSignature()
	{
		$this->signature;
	}	


}