<?php
echo "<link rel='stylesheet' href='style.css'>";
echo "<h1>Группа студентів</h1>";
$students = [
    [
  "name" => "Joan",
  "surname" => "Joanson",
  "year" => 2005,
  "marks" => [
          "PHP" => 4,
          "JS" => 3,
          "HTML" => 5 
          ] 
    ],
    [
  "name" => "Jack",
  "surname" => "Smith",
  "year" => 2003,
  "marks" => [
          "PHP" => 3,
          "JS" => 9,
          "HTML" => 4 
          ] 
    ],
    [
  "name" => "Martin",
  "surname" => "Miller",
  "year" => 2004,
  "marks" => [
          "PHP" => 4,
          "JS" => 3,
          "HTML" => 5 
          ] 
    ]
];   
    // function cmp_name($a, $b)
    // {
    //     return ($a["name"] <=> $b["name"]);
    // }
    
    // function cmp_surname($a, $b)
    // {
    //     return ($a["surname"] <=> $b["surname"]);
    // }
    
    // function cmp2($a, $b)
    // {
    //     return (array_sum($a['marks'])/count($a['marks']))<=>(array_sum($b['marks'])/count($b['marks']));
    // }

function cmp_year($a, $b)
{
    return ($a["year"] <=> $b["year"]);
}
uasort($students, "cmp_year");

$stud = array_chunk($students, 1, true);

function try_walk($stud, $value)
{
    echo "<tr>";
    foreach ($stud as $key1 => $value1) {
        // foreach ($value1 as $key2 => $value2) {
        if (!is_array($value1)) {
            echo "<td>$value1</td>\n";
        }
        // if (is_array($value1)) {
        else {
            // echo "<td>$key1: </td>\n";
            foreach ($value1 as $key2 => $value2) {
                $sum = round(array_sum($value1) / count($value1));
                echo "<td>\t$value2</td>\n";
            }
            echo "<td>\t$sum</td>\n";
            echo "</tr>";
            echo "\n";
        }
    }
}
echo "<table>";

    echo "<tr><th rowspan='2'>Ім'я</th><th rowspan='2'>Фамілія</th><th rowspan='2'>Рік</th><th colspan='4'>Оцінки</th></tr>";
    echo "<tr><th>PHP</th><th>JS</th><th>HTML</th><th>Середнє арифметичне оцінок</th></tr>";

for ($i=0; $i < count($students); $i++) { 
    array_walk($stud[$i], "try_walk");
}

echo "</table>";