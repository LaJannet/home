<?php
$radicals = [0, 1, 4, 9, 16, 25, 36];
function sqrt_func($n){
    return (sqrt($n));
}
print_r(array_map("sqrt_func", $radicals));