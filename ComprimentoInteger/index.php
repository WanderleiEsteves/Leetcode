<?php

$i = 10;
$x = substr($i, 0, 1);
$y = substr($i, 1, 1);

var_dump($x);
var_dump($y);

// FUNCIONAAAAAAAAAAAAAAAAAAAA, PQ?

function isPalindrome($x)
{
    if ($x < 0)
    {
        return false;
    }

    $i = 0;
    $j = strlen($x) - 1;

    while ($i < $j) 
    {
        $a = substr($x, $i, 1);
        $b = substr($x, $j, 1);
        if ($a != $b) 
        {
            return false;
        }
        $j--;
        $i++;
    }

    return true;
}

//echo isPalindrome($i);
