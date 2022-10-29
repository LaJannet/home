<?php
$r='/\b\w{3}(?=:)\b/';
$p='/(?<!&)cat/';
$s="My little dog and cat: very cute; money is all for my &cat $";
if (preg_match_all($r, $s, $arr))
 	print_r($arr);
if (preg_match_all($p, $s, $array))
 	print_r($array);