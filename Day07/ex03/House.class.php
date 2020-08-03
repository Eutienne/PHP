<?php

abstract class House {

	abstract public function getHouseName();
	abstract public function getHouseMotto();
	abstract public function getHouseSeat();

	public function introduce() {
		$name = $this->getHouseName();
		$motto = $this->getHouseMotto();
		$seat = $this->getHouseSeat();
		print "House $name of $seat : \"$motto\"" . PHP_EOL;
	}
}
?>
