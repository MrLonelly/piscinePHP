<?php

require_once 'Color.class.php';

/**
 * 	Vertex Class
 */

class Vertex
{
	protected		$_x;
	protected		$_y;
	protected		$_z;
	protected		$_w = 1.0;
	protected		$_color;
	public static 	$verbose = false;

	
	function __construct($args)
	{
		if(isset($args['x'])  && isset($args['y']) && isset($args['z']))
		{
			$this->_x = $args['x'];
			$this->_y = $args['y'];
			$this->_z = $args['z'];
		}

		if(isset($args['w']))
		{
			$this->_w = $args['w'];
		}

		if(isset($args['color']) && $args['color'] instanceof Color)
		{
			$this->_color = $args['color'];
		}
		else
			$this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));

		if(self::$verbose)
			printf($this." Constructed\n");
	}

	public function __destruct()
	{
		if(self::$verbose)
			printf($this."Destructed\n");
	}

	public function __toString()
	{
		$str = sprintf("Vertex(x: %.2f, y: %.2f, z: %.2f, w: %.2f ".(self::$verbose ? $this->_color : "").")", $this->_x, $this->_y, $this->_z, $this->_w);
		return $str;
	}

	public static function doc()
	{
		if(file_exists('Vertex.doc.txt'))
		{
			if($str = file_get_contents('Vertex.doc.txt'))
			{
				echo $str;
			}
			else
				echo "No documentation for vertex\n";
		}
	}

	public function getX()
	{
		return $this->_x;
	}

	public function setX($x)
	{
		$this->_x = $x;
	}

	public function getY()
	{
		return $this->_x;
	}

	public function setY($y)
	{
		$this->_y = $y;
	}

	public function getZ()
	{
		return $this->_z;
	}

	public function setZ($z)
	{
		$this->_z = $z;
	}

	public function getW()
	{
		return $this->_x;
	}

	public function setW($w)
	{
		$this->_w = $w;
	}

	public function getColor()
	{
		return $this->_color;
	}

	public function setColor($color)
	{
		$this->_color = $color;
	}
}

?>