#!/usr/bin/php

<?php

if ($argc >= 4)
{
    $a = (int)$argv[1];
    $b = (int)$argv[3];
    $op = $argv[2];

    switch($op)
    {
    case '+':
        $a += $b;
        echo $a."\n";
        break;
    case '-':
        $a -= $b;
        echo $a."\n";
        break;
    case '*':
        $a *= $b;
        echo $a."\n";
        break;
    case '/':
        $a /= $b;
        echo $a."\n";
        break;
    }
}

?>
