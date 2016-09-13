<?php

namespace solid\dip\ok;

/**
 * Interface TaxStrategyInterface
 * @package solid\dip\ok
 */
interface TaxStrategyInterface
{
	public function getTaxAmount(Order $order);
}