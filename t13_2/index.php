<?php
$date = "31.12.2020";
$example = "#(\d{2})\.(\d{2})\.(\d{4})#";
function switches($monthes)
{
    switch ($monthes[2]) {
        case '01':
            $month = 'января';
            break;
        case '02':
            $month = 'февраля';
            break;
        case '03':
            $month = 'марта';
            break;
        case '04':
            $month = 'апреля';
            break;
        case '05':
            $month = 'мая';
            break;
        case '06':
            $month = 'июня';
            break;
        case '07':
            $month = 'июля';
            break;
        case '08':
            $month = 'августа';
            break;
        case '09':
            $month = 'сентября';
            break;
        case '10':
            $month = 'октября';
            break;
        case '11':
            $month = 'ноября';
            break;
        case '12':
            $month = 'декабря';
            break;
    }
    return $monthes = "$monthes[1] $month $monthes[3] года";
}
$result = preg_replace_callback($example, 'switches', $date);
echo $result;