<?php
echo "<link rel='stylesheet' href='style.css'>";
echo "<h1>Страны</h1>";
$countries = [
	[
		"name" => "France",
		"capital" => "Paris",
		"area" => 640679,
		"population" => [
		  "2000" => 59278000,
		  "2010" => 59278000
	        ]
	],
	[
		"name" => "England",
		"capital" => "London",
		"area" => 130395,
		"population" => [
		  "2000" => 58800000,
		  "2010" => 63200000
	        ]
	],
        [
            "name" => "Deutschland",
            "capital" => "Berlin",
            "area" => 357021,
            "population" => [
              "2000" => 82260000,
              "2010" => 81752000
            ]
        ]
        ,
        [
            "name" => "China",
            "capital" => "Beijing",
            "area" => 9597000,
            "population" => [
              "2000" => 12630000,
              "2010" => 13380000
            ]
        ]
        ,
        [
            "name" => "Korea",
            "capital" => "Seoul",
            "area" => 100210,
            "population" => [
              "2000" => 47010000,
              "2010" => 51582000
            ]
        ]
  ];
for ($i = 0; $i < count($countries); $i++) {
$populAverage = (array_sum($countries[$i]['population'])/count($countries[$i]['population']));
$countries[$i]['population']["average"] = $populAverage;
}

function cmp_capital($a, $b)
{
    return ($a["capital"] <=> $b["capital"]);
}

function cmp_area($a, $b)
{
    return ($a["area"] <=> $b["area"]);
}

function cmp_name($a, $b)
{
    return ($a["name"] <=> $b["name"]);
}

function cmp2($a, $b)
{
    return (array_sum($a['population'])/count($a['population']))<=>(array_sum($b['population'])/count($b['population']));
}

function try_walk($country, $key_country, $data)
{
    static $i = 1; 
    echo "<tr><td>$data  $i </td>";
    foreach ($country as $key => $value) {
        if (!is_array($value)) {
            echo "<td>$value</td>";
        } else {
            echo "<td>";
            foreach ($value as $k => $v) {
                if ($k == "average") {
                    echo "$v млн </td></tr>";
                }
            }
        }
    }
    echo "\n";
    $i++;
}

echo "<table>";

function setTable($countries)
{
    echo "<tr><th>№</th><th>Назва</th><th>Столиця</th><th>Площа</th><th>Середнє арифметичне населення</th></tr>";
    array_walk($countries, "try_walk", " ");
}

uasort($countries, "cmp_capital");
setTable($countries);

uasort($countries, "cmp_name");
setTable($countries);

uasort($countries, "cmp_area");
setTable($countries);

uasort($countries, "cmp2");
setTable($countries);

echo "</table>";