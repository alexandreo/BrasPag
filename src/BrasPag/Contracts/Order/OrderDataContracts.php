<?php 
namespace Alexandreo\Contracts\Order;

interface OrderDataContracts
{

	public function setMerchantId($merchantId);

	public function setOrderId($orderId);

	public function setBraspagOrderId($braspagOrderId);

	public function getMerchantId();

	public function getOrderId();

	public function getBraspagOrderId();

}