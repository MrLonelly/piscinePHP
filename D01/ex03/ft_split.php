<?php

function ft_split($str)
{
    $temp = explode(" ", $str);
    $words = array();

    foreach($temp as $word)
    {
        if($word != ' ')
            array_push($words, $word);
    }

    return $words;
}

?>

