<?php
// 1 usort (масив, функція, що сортує)
// 2 
function first($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(6, 7, 5, 4, 1);

usort($a, "first");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}
echo "\n";
// 3
function second($a, $b)
{
    return strcmp($a["drink"], $b["drink"]);
}

$drinks[0]["drink"] = "lemonad";
$drinks[1]["drink"] = "coffee";
$drinks[2]["drink"] = "tea";

usort($drinks, "second");

foreach ($drinks as $key => $value) {
    echo "\$drinks[$key]: " . $value["drink"] . "\n";
}


