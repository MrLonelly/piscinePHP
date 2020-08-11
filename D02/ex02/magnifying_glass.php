#!/usr/bin/php

<?php

if($argc > 1)
{
	$file = fopen($argv[1], "r") or die ("Unable to open file!");

	$str = fread($file, filesize($argv[1]));

	$str = explode("title", $str);

	for($i = 0; $i < count($str); $i++)
	{
		$j = 0;
		while($str[$i][$j] != '>')
		{
			$str[$i][$j] = strtoupper($str[$i][$j]);
			$j++;
		}
	}

	$str = implode("title", $str);
	$str  = explode(">", $str);

	for($i = 0; $i < count($str); $i++)
	{
		$j = 0;
		while($str[$i][$j] != '<' && $str[$i][$j])
		{
			$str[$i][$j] = strtoupper($str[$i][$j]);
			$j++;
		}
	}

	$str = implode(">", $str);
	echo($str);
	fclose($file);
}

?>