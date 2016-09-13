<?php

namespace solid\dip\ok;

/**
 * Interface DiscountCalculatorInterface
 * @package solid\dip\ok
 */
interface DiscountCalculatorInterface
{
	public function calculateDiscount(Order $order);
}