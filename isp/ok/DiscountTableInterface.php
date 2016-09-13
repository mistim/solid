<?php

namespace solid\isp\ok;

/**
 * Interface DiscountTableInterface
 * @package solid\isp\ok
 */
interface DiscountTableInterface
{
	public function applyDiscount($discount);
	public function applyPromoCode($promo_code);
}