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

	/**
	 * @param DiscountCalculatorInterface $discountCalculator
	 * @param TaxStrategyInterface        $taxStrategy
	 */
	public function __construct(DiscountCalculatorInterface $discountCalculator, TaxStrategyInterface $taxStrategy)
	{
		$this->discountCalculator = $discountCalculator;
		$this->taxStrategy = $taxStrategy;
	}

	/**
	 * @param Order $order
	 *
	 * @return mixed
	 */
	public function calculateTotal(Order $order)
	{
		$itemTotal = $order->getItemTotal();
		$discountAmount = $this->discountCalculator->calculateDiscount($order);
		$taxAmount = $this->taxStrategy->getTaxAmount($order);

		return $itemTotal - $discountAmount + $taxAmount;
	}
}