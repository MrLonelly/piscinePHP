#!/usr/bin/php

<?php

if($argc >= 2)
{
	$str = explode(" ", $argv[1]);

	if(count($str) != 5)
	{
		echo "Wrong Format\n";
		return;
	}

	$day = (int)$str[1];

	$month = "";
	switch ($str[2])
	{
		case 'Janvier':
			$month = "01";
			break;
		
		case 'Février':
			$month = "02";
			break;
		case 'Mars':
			$month = "03";
			break;
		case 'Avril':
			$month = "04";
			break;
		case 'Mai':
			$month = "05";
			break;
		case 'Juin':
			$month = "06";
			break;
		case 'Juillet':
			$month = "07";
			break;
		case 'Aout':
			$month = "08";
			break;
		case 'Septembre':
			$month = "09";
			break;
		case 'Octobre':
			$month = "10";
			break;
		case 'Novembre':
			$month = "11";
			break;
		case 'Décembre':
			$month = "12";
			break;
	}

	$year = $str[3];

	$time = $year.'/'.$month.'/'.$day.' '.$str[4];
	$result = strtotime($time);

	if($result == false)
	{
		echo "Wrong Format\n";
	}
	else
	{
		echo $result;
	}
//	print_r($str);
}

?>