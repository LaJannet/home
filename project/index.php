<?php

$info = array('фігура', 'форма', 'колір', 'розмір');

// 1.1
list($figure, , $color, $size) = $info;
echo "$figure має різний $color і $size.\n";

// 1.2
list($figure, $form, $color, $size) = $info;
echo "Саме $form, $color і $size, допомагає зрозуміти, що це $figure .\n";

// 1.3
$arr = ['elephant', 'cat', 'dog']; 
list( $a[0], $b[1], $c[2]) = $arr;

// 2
list( , , , $size) = $info;
echo "Хочеш знайти $size?\n";

// 3
list($bar) = "Hello World!";
var_dump($bar); // NULL

// 4
list($a, list($b, $c)) = array(5, array(6, 8));
var_dump($a, $b, $c);