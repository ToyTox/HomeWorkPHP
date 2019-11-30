<?php
require('src/function.php');

echo tasc1(['Мороз', 'и', 'солнце', 'день', 'чудесный'], true) . '<br>';

echo tasc2('+', 3, 9, 8, 1.1) . '<br>';

echo tasc3(rand(1,10), rand(1,10)) . '<br>';

echo task4($time) . '<br>';

echo task5($poem) . '<br>';

echo task6($str) . '<br>';

echo task7('test.txt');