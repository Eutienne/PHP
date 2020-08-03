#!/usr/bin/php
<?php

require_once "../ex00/Color.class.php";

class Vertex {
	private $_x;
	private $_y;
	private $_z;
	private $_w = 1.0;
	private $_color;
	public static $verbose = FALSE;

	public function __construct(array $cordinate){
		$this->_color = new Color( array( 'red' => 255, 'green' => 255, 'blue' => 255) );
		if (isset($cordinate['x']) && isset($cordinate['y']) && isset($cordinate['z']))
		{
			$this->_x = $cordinate['x'];
			$this->_y = $cordinate['y'];
			$this->_z = $cordinate['z'];
		}
		else
			return false;
		if (array_key_exists('color', $cordinate))
		{
			if (!$cordinate['color'] instanceof Color)
				return false;
			$this->_color = $cordinate['color'];
		}	
		if (array_key_exists('w', $cordinate))
			$this->_w = $cordinate['w'];
		if (self::$verbose)
			print $this->__toString() . " constructed" . PHP_EOL;
	}

	public function __toString()
	{
		$ret = sprintf("Vertext( x: %.2f, y: %.2f, z:%.2f, w:%.2f, $this->_color )", $this->_x, $this->_y, $this->_z, $this->_w);
		$ret2 = sprintf("Vertext( x: %.2f, y: %.2f, z:%.2f, w:%.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
		if (self::$verbose)
			return $ret;
		else
			return $ret2;

	}
	public function __destruct()
	{
		if (self::$verbose)
			print $this->__toString() . " destructed" . PHP_EOL;

	}
	static function doc()
	{
		if (file_exists('Vertex.doc.txt'))
			{
				$str = file_get_contents('Vertex.doc.txt');
				return ($str);
			}
		else
			echo "Error: .doc file doesn't exist.\n";
	}
	public function getX(){return $this->_x;}
	public function getY(){return $this->_y;}
	public function getZ(){return $this->_z;}
	public function getW(){return $this->_w;}
	public function getCol(){return $this->_color;}

	public function setX($x){$this->_x = $x;}
	public function setY($y){$this->_y = $y;}
	public function setZ($z){$this->_z = $z;}
	public function setW($w){$this->_w = $w;}
	public function setCol($col){ $this->_col = $col;}
}

?>
