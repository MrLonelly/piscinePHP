<?php

class Tyrion extends Lannister
{
	public function sleepWith($object)
	{
		if($object instanceof Jaime)
		{
			printf("Not even if I'm drunk !\n");
		}

		if($object instanceof Sansa)
		{
			printf("Let's do this.\n");
		}

		if($object instanceof Cersei)
		{
			printf("Not even if I'm drunk !\n");
		}
	}
}

?>