<?php
$day = random_int(1, 8);

switch ($day) {
    case 1:
        //no break
    case 2:
        //no break
    case 3:
        //no break
    case 4:
        //no break
    case 5:
        echo 'Это рабочий день';
    break;
    case  6:
        //no break
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}
