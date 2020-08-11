#!/usr/bin/php

<?php

if($argc > 1)
{
    $str = $argv[1];

    $str = trim(preg_replace('/\t/', ' ', $str));

    $arr = explode(" ", $str);

    $a = "";
    for($i = 0; $i < count($arr); $i++)
    {
        if($arr[$i] != '')
        {
            $a .= $arr[$i];

            if($i < count($arr) - 1)
            {
                $a .= ' ';
            } 
        }
    }
    echo $a."\n";
}
?>
