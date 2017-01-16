<?php

// ascend: from smallest to biggest.
function simplesort($arr)
{
    $countOfArray=count($arr);

    for($firer = 0; $firer < $countOfArray-1; $firer++)
    {
        $finished=true;

        for ($target=$firer+1; $target< $countOfArray; $target++) 
        {
            // make the specified elements ordered
            if($arr[$target] < $arr[$firer])
            {
                $temp = $arr[$target];
                $arr[$target] = $arr[$firer];
                $arr[$firer] = $temp ;
            }

            // decide if neighbour elements are ordered.
            if($arr[$target-1] > $arr[$target])
                $finished=false;
        }

        echo 'round '. ($firer+1) . ': ', implode(',', $arr), "\n";

        if($finished)
        {
            break;
        }

    }
    echo PHP_EOL;
    echo implode(',', $arr), "\n";
    print_r($arr); // similar as the above line
}
