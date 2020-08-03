<?php

class jaime extends lannister{

	public function sleepWith($i){
		if (get_class($i) === "Cersei")
			echo "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL;
		else
			parent::sleepWith($i);
	}
}
?>
