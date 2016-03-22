<?php

include_once('CountryFactory.php');
include_once('GraphicProduct.php');
include_once('TextProduct.php');

class Client {
	private $countryFactory;

	public function __construct() {
		$this->countryFactory = new CountryFactory();


		print_r($this->countryFactory->doFactory(new GraphicProduct()).PHP_EOL);
		print_r($this->countryFactory->doFactory(new TextProduct()));
	}
}

$cliente = new Client();