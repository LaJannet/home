<?php
$letter = "Мы будем рады видеть Вашего сына на нашем мероприятии. Ждем его 25 октября. Оргкомитет.";
$let = explode(". ", $letter);
$array = [
    str_replace("Вашего сына", "Вашу дочь", substr_replace($let[0], "Уважаемый Ингилаб Иманов! ", 0, 0)),  
    str_replace("его", "ее", $let[1]),  
    str_replace("Оргкомитет", "Администрация", $let[2]),  
];
$arrays = implode(". ",$array);
echo "Было: $letter \n";
echo "Стало: $arrays \n";