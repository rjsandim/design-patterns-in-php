<?php

include_once('GraphicFactory.php');
include_once('TextFactory.php');

class Client {
	private $someGraphic;
	private $someText;

	public function __construct() {
		$this->someGraphic = new GraphicFactory();
		$this->someText = new TextFactory();

		print_r($this->someGraphic->startFactory().PHP_EOL);
		print_r($this->someText->startFactory());
	}
}

$cliente = new Client();