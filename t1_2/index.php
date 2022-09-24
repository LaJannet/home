<?php

$min = 360;
$max = 410;
$x = rand($min, $max)/10;
echo($x < 37.7 ? "<span style = \" color: green;\">Healthy!: </span>" . $x : ($x > 37.7 ? "<span style = \" color: red;\">Ill!: </span>" . $x : "<span style = \" color: orange;\">Something is wrong...: </span>" . $x));