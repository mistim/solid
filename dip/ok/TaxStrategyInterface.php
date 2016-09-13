<?php

namespace solid\dip\ok;

interface TaxStrategyInterface
{
	public function getTaxAmount(Order $order);
}