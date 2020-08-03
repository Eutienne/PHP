#!/usr/bin/php
<?php
Class Color{

	public	$red;
	public	$green;
	public	$blue;
	public static $verbose = FALSE;

	public function __construct(array $colargs){
		$this->red = array_key_exists('red', $colargs) ? (int)$colargs['red'] : '0';
		$this->green = array_key_exists('green', $colargs) ? (int)$colargs['green'] : '0';
		$this->blue = array_key_exists('blue', $colargs) ? (int)$colargs['blue'] : '0';
		if (array_key_exists('rgb', $colargs))
		{
			$this->red = ((int)$colargs['rgb'] >> 16) & 0xff;
			$this->green = ((int)$colargs['rgb'] >> 8) & 0xff;
			$this->blue = ((int)$colargs['rgb']) & 0xff;
		}
		$ret = sprintf("Color( red: %3d green: %3d, blue: %3d ) constructed.", $this->red, $this->green, $this->blue);
		if (self::$verbose)
			print $ret . PHP_EOL;
	}
	public function __toString()
	{
		$ret = sprintf("Color( red: %3d green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
		return ($ret);
	}
	public function __destruct(){
		$ret = sprintf("Color( red: %3d green: %3d, blue: %3d ) destructed.", $this->red, $this->green, $this->blue);
		if (self::$verbose)
			print $ret . PHP_EOL;
	}
	static function doc()
	{
		if (file_exists('Color.doc.txt'))
			{	
				$str = file_get_contents('Color.doc.txt');
				return ($str);
			}
		else
			echo "Error: .doc file doesn't exist.\n";
	}
	public function add($col)
	{
		$new = new Color( array( 
			'red' => $this->red + $col->red < 0xff ? $this->red + $col->red : 0xff, 
			'green' => $this->green + $col->green < 0xff ? $this->green + $col->green : 0xff, 
			'blue' => $this->blue + $col->blue < 0xff ? $this->blue + $col->blue : 0xff));
		return ($new);
	}
	public function sub($col)
	{
		$new = new Color( array( 
			'red' => $this->red - $col->red > 0 ? $this->red - $col->red : 0, 
			'green' => $this->green - $col->green > 0 ? $this->green - $col->green : 0, 
			'blue' => $this->blue - $col->blue > 0 ? $this->blue - $col->blue : 0));
		return ($new);


	}
	public function mult($factor)
	{
		$new = new Color( array( 
			'red' => $this->red * $factor < 0xff ? $this->red * $factor : 0xff,
			'green' => $this->green * $factor < 0xff ? $this->green * $factor : 0xff,
			'blue' => $this->blue * $factor < 0xff ? $this->blue * $factor : 0xff ));
		return ($new);
	}


}

?>
