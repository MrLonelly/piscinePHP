<?php

require_once 'Vertex.class.php';

class Vector
{
	private $_x;
	private $_y;
	private $_z;
	private $_w = 0.0;
	static public $verbose = false;

	function __construct($args)
	{
		if(isset($args['dest']) && $args['dest'] instanceof Vertex)
		{
			if(isset($args['orig']) && $args['orig'] instanceof Vertex)
			{
				$origin = new Vector(array('x' => $args['orig']->getX(), 'y' => $args['orig']->getY(), 'z' => $args['orig']->getZ()));
			}
			else
				$origin = new Vector(array('x' => 0, 'y' => 0, 'z' => 0));

			$this->_x = $args['dest']->getX() - $origin->getX();
			$this->_y = $args['dest']->getY() - $origin->getY();
			$this->_z = $args['dest']->getZ() - $origin->getZ();
		}

		if(self::$verbose)
			printf($this." Constructed\n");
	}

	public function __destruct()
	{
		if(self::$verbose)
			printf($this." Destructed\n");
	}

	public function __toString()
	{
		$str = sprintf("Vector (x: %.2f, y: %.2f, z: %.2f, w: %.2f)", $this->_x, $this->_y, $this->_z, $this->_w);

		return $str;
	}

	static public function doc()
	{
		if(file_exists('Vector.doc.txt'))
		{
			if($str = file_get_contents('Vector.doc.txt'))
			{
				echo $str;
			}
			else
				echo "No doc file\n";
		}
	}

	public function magnitude()
	{
		return (float)sqrt(pow($this->_x, 2) + pow($this->_y, 2) + pow($this->_z, 2));
	}

	public function normalize()
	{

		if($this->magnitude() == 1)
			return clone $this;

		$x = $this->_x / $this->magnitude();
		$y = $this->_y / $this->magnitude();
		$z = $this->_z / $this->magnitude();

		return new Vector(array('dest' => new Vertex(array('x' => $x, 'y' => $y, 'z' => $z))));
	}

	public function add( $rhs )
	{
		return new Vector(array(
			'dest' => new Vertex(array(
				'x' => $this->_x + $rhs->getX(),
				'y' => $this->_y + $rhs->getY(),
				'z' => $this->_z + $rhs->getZ()
			))
		));
	}

	public function sub( $rhs )
	{
		return new Vector(array(
			'dest' => new Vertex(array(
				'x' => $this->_x - $rhs->getX(),
				'y' => $this->_y - $rhs->getY(),
				'z' => $this->_z - $rhs->getZ()
			))
		));
	}

	public function opposite()
	{
		return new Vector(array(
			'dest' => new Vertex(array(
				'x' => $this->_x * -1,
				'y' => $this->_y * -1,
				'z' => $this->_z * -1
			))
		));
	}

	public function scalarProduct( $k )
	{
		return new Vector( array(
			'dest' => new Vertex( array(
				'x' => $this->_x * $k,
				'y' => $this->_y * $k,
				'z' => $this->_z * $k
			))
		));
	}

	public function dotProduct( Vector $rhs )
	{
		return (float)($this->_x * $rhs->getX() + $this->_y * $rhs->getY() + $this->_z * $rhs->getZ());
	}

	public function cos( Vector $rhs )
	{
		$module = ($this->magnitude() * $rhs->magnitude());

		if($module != 0)
			return (float)($this->dotProduct($rhs) / $module);
		else
			return 0;
	}

	public function crossProduct(Vector $rhs)
	{
		$a = $this->_y * $rhs->getZ() - $this->_z * $rhs->getY();
		$b = $this->_x * $rhs->getZ() - $this->_z * $rhs->getX();
		$c = $this->_x * $rhs->getY() - $this->_y * $rhs->getX();

		return new Vector(array(
			'dest' => new Vertex(array(
				'x' => $a,
				'y' => $b,
				'z' => $c
			))
		));
	}

	public function getX()
	{
		return $this->_x;
	}

	public function getY()
	{
		return $this->_y;
	}

	public function getZ()
	{
		return $this->_z;
	}

	public function getW()
	{
		return $this->_w;
	}
}

?>