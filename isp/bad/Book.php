<?php

namespace solid\isp\bad;

/**
 * Class Book
 * @package solid\isp\bad
 */
class Book implements ItemInterface
{
	public function applyDiscount($discount) {/*...*/}
	public function applyPromoCode($promo_code) {/*...*/}
	public function setCondition($condition) {/*...*/}
	public function setPrice($price) {/*...*/}

	// Лишние методы
	public function setColor($color) {/*...*/}
	public function setSize($size) {/*...*/}
}