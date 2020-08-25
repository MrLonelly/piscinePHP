<?php

class Jaime extends Lannister
{
	public function sleepWith($object)
	{
		if($object instanceof Tyrion)
		{
			printf("Not even if I'm drunk !\n");
		}

		if($object instanceof Sansa)
		{
			printf("Let's do this.\n");
		}

		if($object instanceof Cersei)
		{
			printf("With pleasure, but only in a tower in Winterfell, then.\n");
		}
	}
}

?>