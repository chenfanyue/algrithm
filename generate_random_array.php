<?php

function makearray($length)
{
    $i=$length;
    while ($i--) {
        $arr[]=mt_rand(1,1000);
    }
    echo "origin: ";
    for ($i=0; $i < $length; $i++) { 
        echo "$arr[$i] ";
    }
    echo "\n";
    return $arr;
}
