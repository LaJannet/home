<?php
$reg = '/^[a-z]+\w*@(gmail|org|ukr)\.(com|ua|net)$/';
$names = ["sjsjsj13@org", "ffnet@gmail.com", "skjfd@jjl.ua", "jsdso_15@ukr.net"];

for ($i=0; $i < count($names); $i++) { 
    if (preg_match($reg, $names[$i], $matches))
        echo "$names[$i] - правильное доменное имя;";
    else
        echo "$names[$i] - неправильное доменное имя;";
    echo "\n";
}