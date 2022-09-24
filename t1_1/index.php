<?php
/*temperature */
$min = -50;
$max = 50;
$x = rand($min, $max);
if ($x < 0) {
    echo "<span style = \" color: blue;\">Freeze: </span>" . $x;
} elseif ($x > 0) {
    echo "<span style = \" color: red;\">Warm: </span>" . $x;
} else {
    echo "<span style = \" color: orange;\">Not warm and not freeze: </span>" . $x;
}
/*
$x = round(37.7);
 
if ($x < 0) {
    echo "<span style = \" color: blue;\">Freeze: </span>" . $x;
} elseif ($x > 0) {
    echo "<span style = \" color: red;\">Warm: </span>" . $x;
} else {
    echo "<span style = \" color: orange;\">Not warm and not freeze: </span>" . $x;
}*/