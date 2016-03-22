<?php


include_once('Product.php');

abstract class Creator {

	protected abstract function factoryMethod(Product $product);

	public function doFactory(Product $product) {
		return $this->factoryMethod($product);
	}
}