<?php
$arr = [3, 4, -9, 16, 25, -36];
function filtration($a){
    return ($a > 0);
}

function sum($b, $a)
{
    return $a * $b;
}

$array = array_filter($arr, "filtration");
print_r($array);
print_r(array_reduce($array, "sum", 1));