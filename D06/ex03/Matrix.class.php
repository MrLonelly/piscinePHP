<?php

require_once  'Vertex.class.php';

class Matrix
{
	const IDENTITY = "Identity-Matrix";
	const SCALE = "Scale-Matrix";
	const RX = "Ox rotation";
	const RY = "OY rotation";
	const RZ = "Oz rotation";
	const TRANSLATION = "Matrix-Translation";
	const PROJECTION = "Matrix-Projection";

	private $_preset;
	private $_scale;
	private $_angle;
	private $_vtc;
	private $_fov;
	private $_ratio;
	private $_near;
	private $_far;

	static public $_verbose = false;

	private $_matrix = array();


	public function __construct($args)
	{
		if(isset($args['preset']));
			$this->_preset = $args['preset'];

		if(isset($args['scale']));
			$this->_scale = $args['scale'];

		if(isset($args['angle']));
			$this->_angle = $args['angle'];

		if(isset($args['vtc']));
			$this->_vtc = $args['vtc'];

		if(isset($args['fov']));
			$this->_fov = $args['fov'];

		if(isset($args['ratio']));
			$this->_ratio = $args['ratio'];

		if(isset($args['near']));
			$this->_near = $args['near'];

		if(isset($args['far']));
			$this->_far = $args['far'];

		$this->creatematrix();
	}

	public function __destruct()
	{
		if(self::$verbose)
			printf("");
	}
}

?>