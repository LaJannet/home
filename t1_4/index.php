<?php
/*a*x2 + b*x +c = 0 */
$min = 1;
$max = 10;
$a = rand($min, $max);
echo "<span style = \" color: green;\">a = </span>" . $a .  ";" . "<br>";
$b = rand($min, $max);
echo "<span style = \" color: orange;\">b = </span>" . $b .  ";" . "<br>";
$c = rand($min, $max);
echo "<span style = \" color: red;\">c = </span>" . $c .  ";" . "<br>";
$x = rand($min, $max);

if ($a == 0) {
    if ($b != 0) {
      $x = -$c / $b;
      echo $x;
    } else {
        echo "Error";
    }
  } else {
    $d = $b * $b - 4 * $a * $c;
    if($d < 0){
      echo "<span style = \" color: red;\">Извлекать нельзя!</span>";
    }
    else{
      $de = sqrt($d);
      if($de < 0){
        echo "<span style = \" color: red;\">Рівняння не має коренів!</span>";
      }
      elseif ($de == 0){
        $x1 = -$b / 2 * $a;
        echo "<span style = \" color: red;\">Рівняння має один корінь: </span>" . $x1;      
      } 
      elseif($de > 0){
          $x1 = -$b + $de/ 2 * $a;
          $x2 = -$b - $de/ 2 * $a;
        echo "<span style = \" color: red;\">Рівняння має два корені: </span>" . round($x1) . ";" . round($x2) . ";";
      }
    }
  }

