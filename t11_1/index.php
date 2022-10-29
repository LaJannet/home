<?php
$string = "She has got a very good collection and she is proud of it, so she keeps her dolls in special bags and doll is houses.";
$word='/\b\w{2}(?=,)\b/';
$keywords = preg_split("/[\s,]+/", $string);
$key = array_unique($keywords);
print_r($key);
if (preg_match_all($word, $string, $arr))
print_r($arr);