<?php

abstract class Fighter{

	abstract public function fight($target);
	public $name;

	public function __construct($name){
		$this->name = $name;
		return $name;	
	}

	public function __toString()
	{
		if ($this->name)
			return ($this->name);
	}
}
?>
