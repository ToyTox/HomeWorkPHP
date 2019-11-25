<?php
//Задача 1
$name = 'Артем';
$age = '30';
echo "Меня зовут: $name <br>";
echo "Мне $age лет <br>";
echo "\"!|/’\"\\ <br>";

//Задача 2
const PIC = 80;
const FELT_PEN = 23;
const PEN = 40;
$paints = PIC - FELT_PEN - PEN;
echo $paints . "<br>";

//Задача 3
$age1 = rand(0, 120);
if (($age1 >= 18) && ($age1 <= 65)) {
    echo "Вам еще работать и работать";
} elseif ($age1 > 65) {
    echo "Вам пора на пенсию";
} elseif ($age1 <= 17) {
    echo "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}
echo "<br>";

//Задача 4
$day = rand(1, 10);
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;
}
echo "<br>";

//Задача 5
$car = Array(
    "bmw" => [
        "model" => "X5",
        "speed" => "120",
        "doors" => "5",
        "year" => "2015"
    ],
    "toyota" => [
        "model" => "camry",
        "speed" => "110",
        "doors" => "5",
        "year" => "2014"
    ],
    "opel" => [
        "model" => "astra",
        "speed" => "100",
        "doors" => "5",
        "year" => "2012"
    ]
);
foreach ($car as $key => $value) {
    echo "$key <br>";
    foreach ($car[$key] as $key1 => $value1) {
        echo "$value1 ";
    }
    echo "<br>";
}
echo "<br>";

//Задача 6
echo "<table border='1'>";
for ($rows = 1; $rows <= 10; $rows++) {
    echo "<tr>";
    for ($cols = 1; $cols <= 10; $cols++) {
        $mult = $rows * $cols;
        if (($mult % 2) == 1) {
            echo "<td> [$rows * $cols = $mult] </td>";
        } elseif (($mult % 2) == 0) {
            echo "<td> ($rows * $cols = $mult) </td>";
        } else {
            echo "<td> $mult </td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>