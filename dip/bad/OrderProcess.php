<?php

namespace solid\dip\bad;

/**
 * Class OrderProcess
 * @package solid\dip\bad
 */
class OrderProcess
{
	public function calculateTotal(Order $order)
	{
		$itemTotal = $order->getItemTotal();

		$discountCalculator = new DiscountCalculator();
		$discountAmount = $discountCalculator->calculateDiscount($order);

		$taxAmount = 0;

		if ($order->getCountry() === 'US') {
			$taxAmount = $this->getTaxAmount($order);
		} elseif ($order->getCountry() === 'UK') {
			$taxAmount = $this->getVatAmount($order);
		}

		return $itemTotal - $discountAmount + $taxAmount;
	}

	private function getTaxAmount(Order $order) {/*...*/}
	private function getVatAmount(Order $order) {/*...*/}
}