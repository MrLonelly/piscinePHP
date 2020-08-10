#!/usr/bin/php

<?php

if($argc > 2)
{
    $key = $argv[1];

    $data = array();

    for($i = 2; $i < $argc; $i++)
    {
        $d = explode(":", $argv[$i]);

        $data[$d[0]] = $d[1];
    }

    echo $data[$key]."\n";
}
?>
