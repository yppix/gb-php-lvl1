<?php

$name = readline("Привет, как тебя зовут?\n");

if (!$name) {
    $name = 'Аноним';
}

$work1 = readline("Какая задача стоит перед вами сегодня?\n");
$time1 = (int)readline("Сколько примерно часов эта задача займет?\n");

$work2 = readline("Какая задача стоит перед вами сегодня?\n");
$time2 = (int)readline("Сколько примерно часов эта задача займет?\n");

$work3 = readline("Какая задача стоит перед вами сегодня?\n");
$time3 = (int)readline("Сколько примерно часов эта задача займет?\n");

if (!$work1) {
    $work1 = 'Не указано';
}

if (!$work2) {
    $work2 = 'Не указано';
}

if (!$work3) {
    $work3 = 'Не указано';
}

if (!$time1) {
    $time1 = 0;
}

if (!$time2) {
    $time2 = 0;
}

if (!$time3) {
    $time3 = 0;
}

$total_time = $time1 + $time2 + $time3;

echo("$name, у Вас сегодня запланировано 3 приоритетные задачи:
- $work1 ($time1 ч.)
- $work2 ($time2 ч.)
- $work3 ($time3 ч.)
Примерное время выполнения плана = $total_time ч.");