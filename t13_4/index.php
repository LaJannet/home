<?php
define("HEADER", "04.11.2022 Деканат");
$students = [
    "vasilizy" => [
        "name" => "Василий",
        "score" => 10,
        "olympiad" => true,
    ],
    "mark" => [
        "name" => "Марк",
        "score" => 2,
        "olympiad" => false,
    ],
    "ivan" => [
        "name" => "Иван",
        "score" => 11,
        "olympiad" => true,
    ],
    "evgenie" => [
        "name" => "Евгений",
        "score" => 4,
        "olympiad" => false,
    ],
    "olga" => [
        "name" => "Ольга",
        "score" => 7,
        "olympiad" => true,
    ]
];

$messages = [
    "success" => "За ваши успехи в учебе, награждаем вас стипендией.",
    "deduction" => "Из-за несдачи экзамена, вы получили выговор и будете отчислены через день после получения данного письма.",
    "olympiad" => "Вы гордость нашего учебного заведения, поэтому получите в скором времене приятный бонус.",
];

foreach ($students as $key => $student_info) {
    $str = "\n\n" . HEADER . "\n";
    foreach ($student_info as $key1 => $info) {
        if ($key1 == "name") {
            $str .= "Уважаемый(ая) $info! ";
        }
        if ($key1 == "score") {
            $student_info["score"] <= 5 ? $str .= $messages["deduction"] : $str .= $messages["success"];
        }
        if ($key1 == "olympiad") {
            $student_info["olympiad"] == true ? $str .= $messages["olympiad"] : $str = $str;
        }
    }
    switch ($student_info["score"]) {
        case $student_info["score"] <= 5:
            $str .= "К сожелению ваша квота на степендию будет анулирована из-за скоро исключения из нашого учебного заведения!";
            break;
        case $student_info["score"] >= 6 and $student_info["score"] <= 9:
            $str .= "За неплохой результат, награждаем вас стипендией, которая составляет 1000 грн.";
            break;
        case $student_info["score"] >= 10:
            $str .= "Поздравляем вас с получение степендии, которая составляет: 8000 грн.";
            break;
    }
    echo $str;
}