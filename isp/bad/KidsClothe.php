<?php

namespace solid\isp\bad;

/**
 * Class KidsClothe
 * @package solid\isp\bad
 */
class KidsClothe implements ItemInterface
{
	public function setColor($color) {/*...*/}
	public function setSize($size) {/*...*/}
	public function setCondition($condition) {/*...*/}
	public function setPrice($price) {/*...*/}

	// лишние методы
	public function applyDiscount($discount) {/*...*/}
	public function applyPromoCode($promo_code) {/*...*/}
}