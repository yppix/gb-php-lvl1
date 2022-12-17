<?php

$answer = readline('Введите ваше имя: ');

$arr1 = ['эмоций', 'моментов', 'событий'];
$arr2 = ['позитивных', 'приятных', 'счастливых'];
$arr3 = [];
$congrats = '';
$isInArray = true;

for ($i = 0; $i < 3; $i++) {
    $first = array_rand($arr1);
    $second = array_rand($arr2);
    $arr3[$i] = $arr2[$second] . ' ' . $arr1[$first];
    unset($arr1[$first]);
    unset($arr2[$second]);
}

$last = array_pop($arr3);
$congrats = implode(', ', $arr3) . ' и ' . $last . '!';

$congratsFull = "Дорогой {$answer}, от всего сердца поздравляю тебя с Днем Рождения, желаю {$congrats}";

print_r($congratsFull);
