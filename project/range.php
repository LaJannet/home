<?php
//1
$guess = [];
$guess = range(0, 5);
print_r ( $guess );

//2
foreach (range(0, 6) as $number) {
    echo "$number ";
}
echo "\n";

//3
foreach (range(0, 250, 20) as $number) {
    echo "$number ";
}
echo "\n";

// 4
foreach (range('a', 'g') as $letter) {
    echo "$letter ";
}

echo "\n";

// 4
foreach (range('h', 'f') as $letter) {
    echo "$letter ";
}