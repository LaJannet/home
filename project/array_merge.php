<?php
// 1
$start = 'football'; 
$end = [1 => 'volleyball']; 
$res = array_merge ((array) $start , $end ); 
print_r ( $res );
echo "\n";

// 2
$arr1  = ["animal"  =>  "cat" ,  2 ,  4 ];  
 $arr2  = ["a" ,  "b" ,  "animal"  =>  "dog" ,  "kind"  =>  "mammals" ,  4 ];  
 $res  =  array_merge ( $arr1 ,  $arr2 ); 
 print_r ( $res );
 echo "\n";

 // 3
 $arr1 = array(0 => 'z_a', 2 => 't_a', 1 => 'th_a');
 $arr2 = array(1 => 'o_b', 3 => 'th_b', 4 => 'f_b');
 $res = $arr1 + $arr2;
 var_dump($res);
 echo "\n";

 // 4
 $arr1 = array();
$arr2 = array(2 => "hello");
$res = array_merge($arr1, $arr2);
print_r ( $res );