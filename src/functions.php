<?php
function task1($str_arrays, $opt = false)
{
    $str_line = null;

    if (!isset($opt)) {
        foreach ($str_arrays as $value) {
            echo '<p>' . $value . '</p>';
        }
    } else {
        foreach ($str_arrays as $v) {
            $str_line .= " $v";
        }
    }
    return $str_line;
}

function task2()
{
    $functionParameters = func_get_args();
    $operator = array_shift($functionParameters);
    $result = null;

    is_string($operator) or exit('1-ый параметр не строка');

    $getStringImploded = implode(" $operator ", $functionParameters);
    eval('$result = ' . $getStringImploded . ";");
    echo "Результат: " . $getStringImploded . " = " . $result . "<br />";
}


function task3($a, $b)
{
    if (!is_integer($a) || !is_integer($b)) {
        exit('Ввели не верные данные');
    }
    $d = 1;
    $c = 1;

    function createTrTd($maxTr, $maxTd, $operand1, $operand2)
    {
        if ($operand1 <= $maxTd) {
            echo "<td> $operand1 x $operand2 = ". ($operand1 * $operand2) . "</td>";
            createTrTd($maxTr, $maxTd, $operand1 + 1, $operand2);
        } elseif ($operand2 < $maxTr) {
            echo "<tr>";
            createTrTd($maxTr, $maxTd, $operand1 = 1, $operand2 + 1);
        } else {
            echo "</tr></table>";
        }
    }

    echo '<table><tr>';
    createTrTd($a, $b, $c, $d);
}

function task4()
{
    echo date('d.m.Y H:i'), '</br>';
    echo mktime(00, 00, 00, 24, 02, 2016), "<br>";
}

function task5()
{
    $myString = 'Карл у Клары украл Кораллы';
    echo $myString, "<br/>";
    echo (str_replace('К', '', $myString)), "<br>";
    $getStr = "Две бутылки лимонада";
    echo $getStr, "<br/>";
    echo str_replace('Две', 'Три', $getStr),"<br/>";
}

function task6($file)
{
    if (!is_dir($file)) {
        $fd = fopen($file,'c+t');
        while (!feof($fd)){
            echo fgets($fd);
        }
        fclose($fd);
    }
}
