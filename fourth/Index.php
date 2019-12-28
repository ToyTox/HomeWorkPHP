<?php

require_once "classes\BaseTariff.php";
require_once 'classes\DayTariff.php';
require_once 'classes\HourTariff.php';
require_once 'classes\StudentTariff.php';

echo 'Тариф базовый:';
echo PHP_EOL;
try {
    $cost = new \Tariffs\BaseTariff(4, 61, false);
    if ($cost->GPS == true) {
        echo 'Цена проезда: ' . $cost->calcPriceGPS(25, 61, 3);
    } else {
        echo 'Цена проезда: ' . $cost->calcPrice(25, 10, 3);
    }
} catch (Exception $e) {
    echo 'Warning: ', $e->getMessage();
}
echo PHP_EOL;
echo '<p>';


echo 'Тариф почасовой:';
echo PHP_EOL;
try {
    $cost = new \Tariffs\HourTariff(0, 200, false, true);
    if ($cost->GPS == true) {
        echo 'Цена проезда: ' . $cost->calcPriceGPS(25, 61, 3);
    } elseif ($cost->secondDriver == true) {
        echo 'Цена проезда: ' . $cost->calcPriceAddDriver(25, 61, 3);
    } else {
        echo 'Цена проезда: ' . $cost->calcPrice(25, 10, 3);
    }
} catch (Exception $e) {
    echo 'Warning: ', $e->getMessage();
}
echo PHP_EOL;
echo '<p>';


echo 'Тариф суточный:';
echo PHP_EOL;
try {
    $cost = new \Tariffs\DayTariff(1, 1000, false, true);
    if ($cost->GPS == true) {
        echo 'Цена проезда: ' . $cost->calcPriceGPS(25, 61, 3);
    } elseif ($cost->secondDriver == true) {
        echo 'Цена проезда: ' . $cost->calcPriceAddDriver(25, 61, 3);
    } else {
        echo 'Цена проезда: ' . $cost->calcPrice(25, 10, 3);
    }
} catch (Exception $e) {
    echo 'Warning: ', $e->getMessage();
}
echo PHP_EOL;
echo '<p>';


echo 'Тариф студенческий:';
echo PHP_EOL;
try {
    $cost = new \Tariffs\StudentTariff(4, 1, true);
    if ($cost->GPS == true) {
        echo 'Цена проезда: ' . $cost->calcPriceGPS(25, 61, 3);
    } else {
        echo 'Цена проезда: ' . $cost->calcPrice(25, 10, 3);
    }
} catch (Exception $e) {
    echo 'Warning: ', $e->getMessage();
}
echo PHP_EOL;
echo '<p>';