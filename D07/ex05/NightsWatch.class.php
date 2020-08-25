<?php

class NightsWatch implements IFighter
{
	private $_fighters = array();
	
	public function recruit($object)
	{
		if($object instanceof IFighter)
		{
			$this->_fighters[] = $object;
		}
	}

	public function fight()
	{
		foreach($this->_fighters as $fighter)
		{
			$fighter->fight();
		}
	}
}

?>