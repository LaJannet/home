<?php
$arr = [ 
	[1, -2, 3, 4, 5, -6, 7],
    [8, 9, -10, -11, 12, 13, -14]
];

function plus($value)
{
    return $value > 0;
}

for ($i = 0; $i < count($arr); $i++) {
    $filt = array_filter($arr[$i],"plus");
    $sum1 = array_sum($filt);
    $pos[$i] = $sum1;
    }
    $sum2 = array_sum($pos);
    echo $sum2;