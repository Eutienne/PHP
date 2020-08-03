<?php

class NightsWatch implements IFighter{

	public function fight(){

	}
	public function recruit($i){
		if ($i instanceof IFighter)
			{
				$classname = get_class($i);
				$classname::fight();
			}
	}
}
?>
