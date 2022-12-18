<?php

$arg1 = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$oddOrEven = function (int $num) {
    if ($num % 2 === 0) {
        echo "{$num} - четное ";
    } else {
        echo "{$num} - нечетное ";
    }
};

$oddOrEven2 = function (int $num) {
    echo ($num & 1) ? "{$num} - четное " : "{$num} - нечетное ";
};

$result = array_map($oddOrEven2, $arg1);
