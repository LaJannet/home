<?php
$films = ["Властелин колец" => ["Толкиен", 1954],
   "Гарри Поттер и тайная комната" => ["Джоан Роулинг",1998],
   "Приключения Шерлока Холмса" => ["Конан Дойл",1892],
   "Зло под солнцем" => ["Агата Кристи",1941]
];

// function cmp($a,$b)
// {  
//   if ($a[1] < $b[1])
//     return -1;
//   elseif ($a[1]==$b[1])
//     return 0;
//   else
//     return 1;
// }

// uasort($films,"cmp"); // сортировка (по годам)

// ksort($films);
// print_r($films); // сортировка (по ключам)

ksort($films);
function output($val,$key){
echo "<p style='font-size:20px;margin:0;color:black;'>Фильм
 <span style='color:orange;font-family:Times New Roman;'>\"$key\"</span>
 : </br> Автор: <span style='font-family:segoe print;'>$val[0]</span></br>
  Год: $val[1].</p><br>";
}
array_walk($films, "output");