<?php

namespace solid\isp\bad;

/**
 * Interface ItemInterface
 * @package solid\isp\bad
 */
interface ItemInterface
{
	public function applyDiscount($discount);
	public function applyPromoCode($promo_code);
	public function setColor($color);
	public function setSize($size);
	public function setCondition($condition);
	public function setPrice($price);
}