<?php

//Задание 1
function tasc1(array $arr, $rem = true)
{
    foreach ($arr as $value) {
        if ($rem) {
            $all = implode(' ', $arr);
        } else {
            echo $value . '<p>';
        }
    }
    return $all;
}

//Задание 2
function tasc2(...$args)
{
    $operation = $args[0];
    $result = 0;

    if ($operation == '+') {
        for ($i = 1; $i < sizeof($args); $i++) {
            $result += $args[$i];
        }
    } elseif ($operation == '*') {
        $result = 1;
        for ($i = 1; $i < sizeof($args); $i++) {
            $result *= $args[$i];
        }
    } elseif ($operation == '-') {
        for ($i = 1; $i < sizeof($args); $i++) {
            $result -= $args[$i];
        }
    } else {
        $result = 1;
        for ($i = 1; $i < sizeof($args); $i++) {
            $result /= $args[$i];
        }
    }
    return $result;
}

//Задание 3
function tasc3($rows, $cols)
{
    if (is_int($rows) && is_int($cols)) {
        echo '<table border="1">';
        for ($row = 1; $row <= $rows; $row++) {
            echo '<tr>';
            for ($col = 1; $col <= $cols; $col++) {
                echo '<td>' . "$row * $col = " . $row * $col . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Ошибка';
    }
}

//Задание 4
$time = '24.02.2016 00:00:00';
echo date('d.m.Y H:i') . '<br>';
function task4($time)
{
    return strtotime($time) . '<br>';
}

//Задание 5
$poem = 'Карл у Клары украл Корралы';
function task5($poem)
{
    return mb_strtolower($poem) . '<br>';
}

$str = 'Две бутылки лимонада';
function task6($str)
{
    return str_replace('Две', 'Три', $str) . '<br>';
}

//Задание 6
$test = "Hello again!";
file_put_contents('test.txt', $test);

function task7(string $fileName)
{
    return file_get_contents($fileName);
}

