<?php

namespace solid\dip\ok;

/**
 * Class OrderProcess
 * @package solid\dip\ok
 */
class OrderProcess
{
	/** @var  DiscountCalculatorInterface */
	private $discountCalculator;

	/** @var  TaxStrategyInterface */
	private $taxStrategy;

	public function __construct(DiscountCalculatorInterface $discountCalculator, TaxStrategyInterface $taxStrategy)
	{
		$this->discountCalculator = $discountCalculator;
		$this->taxStrategy = $taxStrategy;
	}

	public function calculateTotal(Order $order)
	{
		$itemTotal = $order->getItemTotal();
		$discountAmount = $this->discountCalculator->calculateDiscount($order);
		$taxAmount = $this->taxStrategy->getTaxAmount($order);

		return $itemTotal - $discountAmount + $taxAmount;
	}
}