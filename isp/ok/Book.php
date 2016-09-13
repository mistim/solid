<?php

namespace solid\isp\ok;

/**
 * Class Book
 * @package solid\isp\ok
 */
class Book implements ItemInterface, DiscountTableInterface
{
	public function setCondition($condition) {/*...*/}
	public function setPrice($price) {/*...*/}
	public function applyDiscount($discount) {/*...*/}
	public function applyPromoCode($promo_code) {/*...*/}
}