<?php
$string = 
"I love &words";
$pattern = "~&\w+~";

if (preg_match_all($pattern, $string, $array))
    print_r($array);

for ($i=0; $i < count($array[0]); $i++) { 
  $reg = strip_tags($array[0][$i]);
  $string = str_replace($array[0][$i], "<b>$reg</b>", $string);
}

print $string;