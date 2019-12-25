<?php

require_once "classes\BaseTariff.php";
require_once 'classes\DayTariff.php';
require_once 'classes\HourTariff.php';
require_once 'classes\StudentTariff.php';

echo 'Тариф базовый:';
echo PHP_EOL;
try {
    $cost = new \Tariffs\BaseTariff(4, 61);
    echo 'Цена проезда: ' . $cost->calcPrice(18, 10, 3);
} catch (Exception $e) {
    echo 'Warning: ', $e->getMessage();
}
echo PHP_EOL;
echo '<p>';

echo 'Тариф почасовой:';
echo PHP_EOL;
try {
    $cost = new \Tariffs\HourTariff(0, 200);
    echo 'Цена проезда: ' . $cost->calcPrice(18, 61, 30);
} catch (Exception $e) {
    echo 'Warning: ', $e->getMessage();
}
echo PHP_EOL;
echo '<p>';

echo 'Тариф суточный:';
echo PHP_EOL;
try {
    $cost = new \Tariffs\DayTariff(1, 1000);
    echo 'Цена проезда: ' . $cost->calcPrice(25, 1471, 3);
} catch (Exception $e) {
    echo 'Warning: ', $e->getMessage();
}
echo PHP_EOL;
echo '<p>';

echo 'Тариф студенческий:';
echo PHP_EOL;
try {
    $cost = new \Tariffs\StudentTariff(4, 1);
    echo 'Цена проезда: ' . $cost->calcPrice(22, 61, 30);
} catch (Exception $e) {
    echo 'Warning: ', $e->getMessage();
}
echo PHP_EOL;
echo '<p>';