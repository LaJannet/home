<?php
$string = "As Jennifer Lopez and Ben Affleck get married, GLAMOUR speaks to a psychologist about whether getting back together with an ex really work";
$array = explode(" ", $string);
function cancel($array)
{
    for ($i = 0; $i < count($GLOBALS['arr']); $i++) {
        if ($i % 2 != 0) {
            $array[$i] = "";
            return implode(" ", $array);
        }
    }
}

function onlyFirstLetter($array) {
    for ($i = 0; $i < count($array); $i++) {
        $array1[$i] = $array[$i][0];
    }
    return implode(" ", $array1);
}

function reverseSorting($array)
{
    krsort($array);
    return implode(" ", $array);
}
echo onlyFirstLetter($array);