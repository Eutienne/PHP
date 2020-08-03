<?php

class UnholyFactory{
	
	public $array = array();

	public function absorb($type){
		if (!$type instanceof Fighter)
		{
			echo "(Factory can't absorb this, it's not a fighter)\n";
			return ;
		}
		foreach ($this->array as $key => $value)
		{
			if ($value == $type->name)
			{
				echo "(Factory already absorbed a fighter of type $type->name)\n";
				return ;
			}
		}
		$this->name = $type->__toString();
		$this->array[$this->name] = $type;
		echo "(Factory absorbed a fighter of type $type->name)\n";
	}
	public function fabricate($fighter)
	{
		foreach($this->array as $key => $value)	
		{
			if ($key === $fighter)
			{
				echo "(Factory fabricates a fighter of type $key)\n";
				return ($value);

			}
		}
	}
}
?>
