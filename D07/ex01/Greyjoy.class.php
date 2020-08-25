<?php

class Greyjoy
{
	protected $familyMotto;

	public function __construct()
	{
		$this->familyMotto = "We do not sow";
	}

	public function announceMotto()
	{
		print($this->familyMotto . PHP_EOL);
	}
}

?>