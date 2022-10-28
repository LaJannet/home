<?php
$str1 = "''''''";
$str2 = "'";
$check = substr_count($str2, "'");
if ($check % 2 == 0){
    echo "Right";}
    else{
        echo "Wrong";
    }