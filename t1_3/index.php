<?php
/*x = a*b + c*d */
$min = 1;
$max = 30;
$a = rand($min, $max);
echo "a = " . $a . "; ";
$b = rand($min, $max);
echo "b = " . $b . "; ";
$c = rand($min, $max);
echo "c = " . $c . "; ";
$d = rand($min, $max);
echo "d = " . $d . "; " . "<br>";
echo $x = $a * $b + $c * $d;