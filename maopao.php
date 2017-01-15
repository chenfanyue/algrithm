<?php

function maopao($arr)
{
    $countOfArray=count($arr);

    for($sorted = 0; $sorted < $countOfArray-1; $sorted++)
    {
        $finished=true;

        for ($index=0; $index< $countOfArray - $sorted - 1; $index++) 
        {
            if($arr[$index] > $arr[$index+1])
            {
                $finished=false;
                $temp = $arr[$index];
                $arr[$index] = $arr[$index+1];
                $arr[$index+1] = $temp ;
            }
        }

        echo 'round '. ($sorted+1) . ': ', implode(',', $arr), "\n";

        if($finished)
        {
            break;
        }

    }
    echo PHP_EOL;
    echo implode(',', $arr), "\n";
    print_r($arr); // similar as the above line
}
