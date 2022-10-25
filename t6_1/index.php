<?php
$users1 = ["John" => "qwerty", "Nicole" => "asdf", "Mark" => "ww"];
$users2 = ["Joan" => "1234", "Mark" => "poiu", "Nicole" => "ggg"];
$a = array_merge($users1, $users2);
$b = array_merge_recursive($users1, $users2);
$c = array_intersect_key($users1, $users2);
$d = array_intersect_key($b, $c);
print_r($a);
print_r($b);
print_r($c);
print_r($d);
print_r(array_diff_key($b, $d));