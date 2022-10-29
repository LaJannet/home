<?php
function sum_row($n){
    $result = 0;
    for ($i = 1; $i < $n; $i++) { 
        $result += $i * $i;
    }
    return $result;
}

echo sum_row(10);
