<?php
$text = "    <a href='test'>Test</a>";
$trimmed = trim($text);
$striptrimmed = strip_tags($trimmed);
$new = htmlspecialchars($trimmed, ENT_QUOTES);
echo "Изначальный текст: $text \n";
echo "Убираем пробелы с начала и конца: $trimmed \n";
echo "Очистка текста от HTML-тегов: $striptrimmed \n"; //10
echo "Заменяем специальные символы сущностями HTML: $new \n"; //11