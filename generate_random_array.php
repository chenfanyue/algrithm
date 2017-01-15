<?php

function makearray()
{
    $i=10;
    while ($i--) {
        $arr[]=mt_rand(1,22);
    }
    echo "origin: ";
    for ($i=0; $i < 10; $i++) { 
        echo "$arr[$i] ";
    }
    echo "\n";
    return $arr;
}
