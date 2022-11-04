<?php
$proffesions = ["врача", "юриста", "учителя"];
$knowledge = [6, 30, 14];
function salary1($salary, $number)
{
    return $salary + 100 + $number;
}

function salary2($salary, $number)
{
    return $salary + 3560 + $number;
}

function salary3($salary, $number)
{
    return $salary + 98940 + $number;
}

function setSalary($proffesion)
{
    $n = array_search($proffesion, $GLOBALS["proffesions"]);
    $number = $GLOBALS["knowledge"][$n] . '000';
    if (isset($proffesion)) {
        $salary = call_user_func("salary" . ($n + 1), 10, $number);
    }
    return $salary;
}

for ($i=0; $i < count($proffesions); $i++) { 
echo "Зарплата $proffesions[$i]: \$" . setSalary($proffesions[$i]) . "\n";
}