<?php 
namespace Alexandreo\Contracts\Payment;

interface AffiliationDataContracts
{

	public function setAffiliationCode($affiliationCode);

	public function setAffiliationKey($affiliationKey);

	public function setUserName($userName);

	public function setPassword($password);

	public function setSignature($signature);

	public function getAffiliationCode();

	public function getAffiliationKey();

	public function getUserName();

	public function getPassword();

	public function getSignature();	


}