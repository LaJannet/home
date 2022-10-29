<?php
$reg = '/^images\/IMG_[0-9]*\.(jpg|png|gif)$/';
$names = [
    "images/IMG_894.png",
    "IMG_8.jpg",
    "IMG_3.jpeg",
    "images/IMG_6/jpg"
];

for ($i=0; $i < count($names); $i++) { 
    if (preg_match($reg, $names[$i], $matches))
        echo "$names[$i] - допустимый файл;";
    else
        echo "$names[$i] - недопустимый файл;";
    echo "\n";
}