<?php 
namespace Alexandreo\Entity\Order;

use Alexandreo\Contracts\Order\OrderDataContracts;

class OrderDataEntity implements OrderDataContracts
{

	private $merchantId;

	private $orderId;

	private $braspagOrderId;

	public function setMerchantId($merchantId)
	{
		$this->merchantId = $merchantId;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
	}

	public function setBraspagOrderId($braspagOrderId)
	{
		$this->braspagOrderId = $braspagOrderId;
	}

	public function getMerchantId()
	{
		return $this->braspagOrderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function getBraspagOrderId()
	{
		return $this->braspagOrderId;
	}

}