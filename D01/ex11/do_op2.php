#!/usr/bin/php

<?php

require("epur_str.php");

if ($argc >= 2)
{
    $str = epur_str($argv[1]);
    
    $num1 = 0;

    $i = 0;
    while($str[$i] != ' ')
    {

        if($str[$i] < '0' || $str[$i] > '9')
        {
            echo "Syntax Error"."\n";
            return;
        }

        $num1 *= 10;
        $num1 += $str[$i] - '0';
        
        $i++;
    }

    echo $i."\n";

    if($str[$i + 1] != '+' && $str[$i + 1] != '-' && $str[$i + 1] != '/' && $str[$i + 1] != '*')
    {
        echo "Syntax Error\n";
        return;
    }
    else
    {
        $op = $str[$i + 1];
    }

    if($str[$i + 2] != ' ')
    {
        echo "Syntax Error\n";
        return;
    }

    $i = $i + 3;
    $num2 = 0;
    while($str[$i])
    {
        if($str[$i] < '0' || $str[$i] > '9')
        {
            echo "Syntax Error"."\n";
            return;
        }

        $num2 *= 10;
        $num2 += $str[$i] - '0';

        $i++;

    }


    echo $num1."\n";
    echo $op."\n";
    echo $num2."\n";
}

?>
