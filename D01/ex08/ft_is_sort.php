<?php

function ft_is_sort($array)
{
    $temp = array();
    $temp = $array;

    sort($temp);

    for($i = 0; $i < count($array); $i++)
    {
        if($temp[$i] != $array[$i])
            return 0;
    }
    return 1;
}

?>
