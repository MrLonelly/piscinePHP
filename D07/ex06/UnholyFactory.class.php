<?php

class UnholyFactory
{
	private $_fighters = array();

	public function absorb($object)
	{
		if($object instanceof Fighter)
		{
			if(isset($this->_fighters[$object->getName()]))
			{
				print("(Factory already absorbed a fighter of type " . $object->getName() . ")" . PHP_EOL);
			}
			else
			{
				print("(Factory absorbed a fighter of type " . $object->getName() . ")" . PHP_EOL);
				$this->_fighters[$object->getName()] = $object;
			}
		}
		else
		{
			print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
		}
	}

	public function fabricate($object)
	{
		
		if(array_key_exists($object, $this->_fighters))
		{
			print("(Factory fabricates a fighter of type " . $object . ")" . PHP_EOL);
			return clone $this->_fighters[$object];
		}
		else
		{
			print("(Factory hasn't absorbed any fighter of type " . $object . ")" . PHP_EOL);
			return null;
		}
		
	}
}

?>