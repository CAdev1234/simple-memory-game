<?php
class Card {

	private $image;

	/**
	 * @param mixed $image
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * @return mixed
	 */
	public function getImage() {
		return $this->image;
	}

	public function __construct($index) {
		$imagesBank = [
			'1.png', '2.png', '3.png', '4.png',
			'5.png', '6.png', '7.png', '8.png'
		];
		if (!isset($imagesBank[$index])) {
			throw new Exception( $index . " is Not a valid card");
		}
		$this->setImage($imagesBank[$index]);
	}
}