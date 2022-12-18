<?php

function workArray(array $arg) : array {
    return [
        'max' => max($arg),
        'min' => min ($arg),
        'avg' => array_sum($arg) / count ($arg)
    ];
}

$arg = range(0,9);