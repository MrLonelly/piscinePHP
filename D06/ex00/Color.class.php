<?php

class Color
{
	public $red;
	public $green;
	public $blue;
	public static $verbose = false;


	function __construct(array $args)
	{
		if(isset($args['rgb']))
		{
			$tmp = intval($args['rgb'], 10);
			$this->red = $tmp / 65536;
			$this->green = $tmp % 65536 / 256;
			$this->blue = $tmp % 65536 % 256;


		}
		else if(isset($args['red']) && isset($args['blue']) && isset($args['green']))
		{
			$this->red = intval($args['red'], 10);
			$this->green = intval($args['green'], 10);
			$this->blue = intval($args['blue'], 10);
		}

		if(self::$verbose)
		{
			echo $this." Constructed\n";
		}
	}

	function __destruct()
	{
		if(self::$verbose)
		{
			printf($this." Destructed\n");
		}
	}

	function __toString()
	{
		$ret = sprintf("Color (red => %d, green => %d, blue => %d)", $this->red, $this->green, $this->blue);

		return $ret;
	}

	static function doc()
	{
		if(file_exists("Color.doc.txt"))
		{
			if($str = file_get_contents("Color.doc.txt"))
			{
				echo $str;
			}
			else
				echo "No doc file\n";
		}
	}

	function add($color)
	{
		$ret = new Color(array(
			'red' => $this->red + $color->red,
			'green' => $this->green + $color->green,
			'blue' => $this->blue + $color->blue
		));

		return $ret;
	}

	function sub($color)
	{
		$ret = new Color(array(
			'red' => $this->red - $color->red,
			'green' => $this->green - $color->green,
			'blue' => $this->blue - $color->blue
		));

		return $ret;
	}

	function mult($color)
	{
		$ret = new Color(array(
			'red' => $this->red * $color,
			'green' => $this->green * $color,
			'blue' => $this->blue * $color
		)); 

		return $ret;
	}

}

?>