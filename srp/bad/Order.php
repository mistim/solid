<?php

namespace solid\srp\bad;

/**
 * Class Order
 * @package solid\srp\bad
 *
 * Три различных типа задач (три причины для изменения одного класса)
 */
class Order
{
	// работа с самим заказом
	public function calculateTotalSum() {/*...*/}
	public function getItems() {/*...*/}
	public function getItemCount() {/*...*/}
	public function addItem() {/*...*/}
	public function deleteItem() {/*...*/}

	// отображение заказа
	public function printOrder() {/*...*/}
	public function showOrder() {/*...*/}

	// работа с хранилищем данных
	public function load() {/*...*/}
	public function save() {/*...*/}
	public function update() {/*...*/}
	public function delete() {/*...*/}
}