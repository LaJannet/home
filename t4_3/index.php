<?php
$n = rand(5,40);
echo "$n: \n";
for ($i=1; $i <= 40; $i++) { 
    if($n%$i==0){
        echo $i . "; ";
    }
}