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

echo tasc1(['Мороз', 'и', 'солнце', 'день', 'чудесный'], true) . '<br>';

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

echo tasc2('+', 3, 9, 8, 1.1) . '<br>';

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

echo tasc3(rand(1,10), rand(1,10)) . '<br>';

function tasc4 ([])
{

}
function tasc5 ([])
{

}
function tasc6 ([])
{

}
function tasc7 ([])
{

}
function tasc8 ([])
{

}
function tasc9 ([])
{

}
function tasc10 ([])
{

}

//Задание 4
echo date('d.m.Y H:i') . '<br>';
$time = '24.02.2016 00:00:00';
echo strtotime($time) . '<br>';

//Задание 5
$poem = 'Карл у Клары украл Корралы';
echo mb_strtolower($poem) . '<br>';
$str = 'Две бутылки лимонада';
echo str_replace('Две', 'Три', $str) . '<br>';

//Задание 6
$test = "Hello again!";
file_put_contents('test.txt', $test);

function printFileContents(string $fileName)
{
    echo file_get_contents($fileName);
}
printFileContents('test.txt');
