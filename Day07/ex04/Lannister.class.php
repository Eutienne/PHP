<?php

class Lannister{

	public function sleepWith($i){
		if (get_class($i) == "Sansa")
			echo "Let's do this." . PHP_EOL;
		else
			echo "Not even if I'm drunk !" . PHP_EOL;
	}
}
?>
