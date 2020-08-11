#!/usr/bin/php

<?php

if($argc >= 2)
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $argv[1]);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$str = curl_exec($ch);
	$str = explode("<", $str);

	for ($i = 0; $i < count($str); $i++)
	{
		if(strlen($str[$i]) > 3)
		{
			if($str[$i][0] == 'i' && $str[$i][1] == 'm' && $str[$i][2] == 'g')
			{
				
				$j = 3;
				while($str[$i][$j] != '"' && $str[$i][$j])
					$j++;
				
				$j++;
				$url = "";
				while($str[$i][$j] != '"' && $str[$i][$j])
				{
					$url .= $str[$i][$j];
					$j++;
				}
				
				if($url[0] == '/')
					$url = $argv[1].$url;

				$filename = explode("/", $url);
				$filename = $filename[count($filename) - 1];

				$ch = curl_init($url);
				$fb = fopen("./".$filename, "wb");
				curl_setopt($ch, CURLOPT_FILE, $fb);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_exec($ch);
				curl_close($ch);
				fclose($fp);
				
				echo $url."\n";
			}
		}
	}

	//print_r($str);
}

?>