<?php 
namespace Alexandreo\Entity\Order;

use Alexandreo\Contracts\Order\OrderDataContracts;

class OrderDataEntity implements OrderDataContracts
{

	private $merchantId;

	private $orderId;

	private $braspagOrderId = '';

	public function setMerchantId($merchantId)
	{
		$this->merchantId = $merchantId;
		return $this;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		return $this;
	}

	public function setBraspagOrderId($braspagOrderId)
	{
		$this->braspagOrderId = $braspagOrderId;
		return $this;
	}

	public function getMerchantId()
	{
		return $this->merchantId;
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