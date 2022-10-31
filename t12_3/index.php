<?php
$book = [
    "название" => "Путешествие",
    "автор" => "Бернар Вербер",
    "год написания" => 1961,
    "издательство" => ""
];

function library($arr)
{
    foreach ($arr as $key => $value) {
        empty($value) ? $value = "-" : $value = $value;
        echo "$key: $value\n";
    }
}

function library2($arr)
{
    foreach ($arr as $key => $value) {
        empty($value) ? $value = "-" : $value = $value;
        echo "$key: $value; ";
    }
}

echo "Iv. ";
library($book);
echo "IIv. ";
library2($book);