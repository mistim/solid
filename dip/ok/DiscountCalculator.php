<?php

namespace solid\dip\ok;

/**
 * Class DiscountCalculator
 * @package solid\dip\ok
 */
class DiscountCalculator implements DiscountCalculatorInterface
{
	private $discount;

	public function calculateDiscount(Order $order)
	{
		return $this->discount;
	}
}