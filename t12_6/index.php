<?php
 $arr = array("I", "and", "U", "Forever");

function point($p, $string){
    $p .= $string."-";
    return $p;
}
function my_cmp($a){
    return strtolower($a);
}
function concat($v){
    return array_reduce((array_map("my_cmp", $v)), "point", "");
}

$b = array_map('my_cmp', $arr);
print_r($b);
print(str_replace(")-", "", concat($arr)));