<?php

namespace solid\dip\bad;

/**
 * Class DiscountCalculator
 * @package solid\dip\bad
 */
class DiscountCalculator
{
	private $discount;

	public function calculateDiscount(Order $order)
	{
		return $this->discount;
	}
}