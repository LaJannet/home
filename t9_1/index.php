<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema film</title>
</head>

<body>
    <h1>Cinema film</h1>
    <?php
    echo "<link rel='stylesheet' href='style.css'>";
$film = [
    [
        "producer" => "	
        David Heyman",   
        "film" => [
            [
                "name" => "Harry Potter",
                "year" => "2001"
            ],
            [
                "name" => "I Am Legend",
                "year" => "2007"
            ],
        ]
    ],
    [
        "producer" => "	
        Tim White",   
        "film" => [
            [
                "name" => "Villains",
                "year" => "2019"
            ],
            [
                "name" => "King Richard",
                "year" => "2021"
            ],
        ]
    ],
    [
        "producer" => "	
        Michael Deeley",   
        "film" => [
            [
                "name" => "The Man Who Fell to Earth",
                "year" => "1976"
            ],
            [
                "name" => "The Long Day's Dying",
                "year" => "1968"
            ],
        ]
    ],
];

function try_walk($film, $key_film, $data){
    static $i = 1;
    echo "<tr><th>$data.$i</th></tr>";
    foreach ($film as $key => $value) {
        print "<tr>";
        print "<td>";
      if (!is_array($value))
        echo "$key: $value\t<br>";
      else {
          echo "$key: ";
          foreach ($value as $k => $v)
            if (is_array($v)){
                foreach ($v as $keys => $val) {
                    echo "[{$keys} - $val]; <br>";
                }
            }
            else{
                echo "[{$k} - $v]; <br>";
            }
          }
          print "</td>";
          print "</tr>";
    }
    $i++;
}

function find($film, $data) {
    $res = [];
    foreach ($film as $num => $film) {
        foreach ($film as $key => $value) {
            if (!is_array($value)) {
                if (stristr($value, $data)) {
                    $res[] = $num;
                }
            } else {
                foreach ($value as $k => $v) {
                    if (is_array($v)) {
                        foreach ($v as $keys => $val) {
                            if (stristr($keys, $data) || strstr($val, $data)) {
                                $res[] = $num;
                            }
                        }
                    }
                    else{
                        if (stristr($v, $data) || strstr($k, $data)) {
                            $res[] = $num;
                        }
                    }
                }
            }
        }
    }
    return array_unique($res);
}
function find_date($date, $film){
    print "<tr><td style =\"background-color: rgb(249, 238, 215);\">Find:  ".$date."</td><tr>";
    $find_result = array_flip(find($film, $date));

    if($find_result){
        $find_res = array_intersect_key($film, $find_result);
        array_walk($find_res, "try_walk", "№");
    }
    else{
        print("Error! Error! Error!");
    }
}
function find_name($name, $film){
    print "<tr><td style =\"background-color: rgb(249, 138, 115);\">Find:  ".$name."</td><tr>";
    $find_result = array_flip(find($film, $name));

    if($find_result){
        $find_res = array_intersect_key($film, $find_result);
        array_walk($find_res, "try_walk", "№");
    }
    else{
        print("Error! Error! Error!");
    }
}
function find_producer($producer, $film){
    print "<tr><td style =\"background-color: rgb(249, 238, 115);\">Find:  ".$producer."</td><tr>";
    $find_result = array_flip(find($film, $producer));

    if($find_result){
        $find_res = array_intersect_key($film, $find_result);
        array_walk($find_res, "try_walk", "№");
    }
    else{
        print("Error! Error! Error!");
    }
}
print "<table>";

find_date(2001, $film);
find_name("The", $film);
find_producer("Michael", $film);

print "</table>";
?>
    
</body>

</html>