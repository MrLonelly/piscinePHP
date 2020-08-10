#!/usr/bin/php
<?php

while (1)
{
    echo "Enter your numbe: ";
    $number = trim(fgets(STDIN));

    if(feof(STDIN))
        exit();

    if(is_numeric($number))
    {
        if($number % 2 == 0)
            echo "Odd\n";
        else
            echo "Even\n";
    }
    else
    {
        echo "$number is not a number\n";
    }
}

?>
