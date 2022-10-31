<?php
$arr = ["home-bred" => "доморощений", "etiolation" => "позбавлення хлорофілу", "youngster" => "парубок", "kneejerk" => "колінний рефлекс"];
// Сравнение без учета регистра символов строк 
function my_cmp($a, $b) {
    for ($i = 0; $i < func_num_args(); $i++) {
        return strlen($a) <=> strlen($b);
    }
}
uasort($arr, "my_cmp"); // Сортування без урахування регістру символів. 
print_r($arr);