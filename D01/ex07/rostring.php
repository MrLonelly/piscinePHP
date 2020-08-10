#!/usr/bin/php

<?php

if($argc > 1)
{
    $str = $argv[1];
    $words = explode(" ", $str);

    $len = count($words);
    
    $aux = $words[0];

    for($i = 1 ; $i < $len; $i++)
        $words[$i - 1] = $words[$i];
    $words[$len - 1] = $aux;

    for($i = 0; $i < $len; $i++)
    {
        echo $words[$i];

        if($i == $len - 1)
            echo "\n";
        else
            echo " ";
    }
}

?>
