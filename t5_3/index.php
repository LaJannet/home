<?php
$arr = array_reverse([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]);
$average = array_sum($arr) / count($arr);
echo "Average = " . $average . "\n";